window.addEventListener("load", function() {
    const loadingScreen = document.getElementById("loading-screen");
    loadingScreen.style.display = "none"; // Esconde a tela de carregamento
});

document.addEventListener("DOMContentLoaded", function () {
    const eventButtons = document.querySelectorAll(".events");
    const aside = document.querySelector("aside");
    let totalValue = 0;  // Variável para manter o valor total

    // Elemento para mostrar o total no final do aside
    const totalDisplay = document.createElement("div");
    totalDisplay.classList.add("total-display");
    totalDisplay.innerHTML = `<div class='value'>Total: R$<span id="total-value">0</span></div>`;
    aside.appendChild(totalDisplay);

    function updateTotalDisplay() {
        document.getElementById("total-value").textContent = totalValue.toFixed(2);
    }

    eventButtons.forEach(button => {
        button.addEventListener("click", function () {
            const nome = button.getAttribute("data-nome");
            const descricao = button.getAttribute("data-descricao");
            const link = button.getAttribute("data-link");
            const valor = parseFloat(button.getAttribute("data-valor")) || 0; // Parse e garante valor numérico

            if (isNaN(valor)) {
                console.error("Valor inválido para o evento:", nome);
                return;
            }

            let existingCard = aside.querySelector(`.event-card[data-nome="${nome}"]`);
            
            if (existingCard) {
                // Incrementa contador e atualiza o total se o card já existir
                let countElement = existingCard.querySelector(".selection-count");
                let count = parseInt(countElement.textContent) || 0;
                count++;
                countElement.textContent = count;

                // Atualiza o valor total
                totalValue += valor;
                updateTotalDisplay();
            } else {
                // Cria o card do evento
                const eventCard = document.createElement("div");
                eventCard.classList.add("event-card");
                eventCard.setAttribute("data-nome", nome);

                eventCard.innerHTML = `
                    <div class='img-placeholder'>
                        <img src='./media/images/${nome.toLowerCase().replace(/ /g, "_")}.jpg' alt='${nome}'>
                    </div>
                    <h2>${nome}</h2>
                    <p>${descricao}</p>
                    <a href="${link}" class="learn-more">Saiba mais</a>
                    <p>Selecionado: <span class="selection-count">1</span> vezes</p>
                    <button class="remove-card">Remover</button>
                `;

                aside.appendChild(eventCard);
                setTimeout(() => eventCard.classList.add("slide-in"), 10);

                totalValue += valor;
                updateTotalDisplay();

                // Evento para remover o card e atualizar o total
                eventCard.querySelector(".remove-card").addEventListener("click", function () {
                    let count = parseInt(eventCard.querySelector(".selection-count").textContent) || 0;
                    totalValue -= valor * count;  // Subtrai o valor total do evento

                    eventCard.classList.remove("slide-in");
                    eventCard.classList.add("slide-out");
                    setTimeout(() => eventCard.remove(), 500);

                    updateTotalDisplay();
                });
            }
        });
    });
    const purchaseButton = document.getElementById("purchase-button");

    purchaseButton.addEventListener("click", function () {
        const selectedEvents = Array.from(document.querySelectorAll(".event-card"));
        if (selectedEvents.length === 0) {
            alert("Nenhum evento selecionado.");
            return;
        }

        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        let totalAmount = 0;
        let yPosition = 10;

        selectedEvents.forEach(eventCard => {
            const name = eventCard.querySelector("h2").textContent;
            const description = eventCard.querySelector("p").textContent;
            const count = parseInt(eventCard.querySelector(".selection-count").textContent);
            const value = parseFloat(eventCard.getAttribute("data-valor"));
            const eventTotal = value * count;

            totalAmount += eventTotal;

            doc.text(`Evento: ${name}`, 10, yPosition);
            yPosition += 10;
            doc.text(`Descrição: ${description}`, 10, yPosition);
            yPosition += 10;
            doc.text(`Quantidade: ${count} - Total: R$ ${eventTotal.toFixed(2)}`, 10, yPosition);
            yPosition += 10;

            // Gera código de barras ou QR code
            const uniqueCode = Math.random().toString(36).substr(2, 8);
            const canvas = document.createElement("canvas");

            // Alternativa 1: QR Code
            QRCode.toCanvas(canvas, uniqueCode, function (error) {
                if (error) console.error(error);
            });

            // Alternativa 2: Código de barras
            // JsBarcode(canvas, uniqueCode, { format: "CODE39" });

            // Adiciona código ao PDF
            const imageData = canvas.toDataURL("image/png");
            doc.addImage(imageData, "PNG", 10, yPosition, 40, 40);

            yPosition += 50;
        });

        // Exibir total no PDF
        doc.text(`Total Geral: R$ ${totalValue.toFixed(2)}`, 10, yPosition);

        // Salva o PDF
        doc.save("Ingressos.pdf");
    });
});
