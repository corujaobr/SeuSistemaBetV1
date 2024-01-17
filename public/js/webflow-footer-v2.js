var base_url = $(".base_url").attr("id");

// Mask form 
$.getScript('https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js').done(() => {
  $('.mask-cpf').mask('000.000.000-00');
  $('.mask-date').mask('00/00/0000');
  $('.mask-phone').mask('(00) 00000-0000');
});

// View/hide password
$("#eye-show-login").click(function() {
    $("#senha").attr("type", "text");
});
$("#eye-hide-login").click(function() {
    $("#senha").attr("type", "password");
});
$("#eye-show-register").click(function() {
    $("#senha-cad").attr("type", "text");
});
$("#eye-hide-register").click(function() {
    $("#senha-cad").attr("type", "password");
});

// disabled input
$(document).ready(function() {
  $('.disabled').attr('disabled', 'disabled');
});

window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.custom-navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('navbar-hidden');
    } else {
        navbar.classList.remove('navbar-hidden');
    }
});
function fetchData() {
    $.get(base_url + "fiverscan/pegarSaldo", function(data) {
        $("#balance").text(data);
    });
}

setInterval(fetchData, 8000);

function deposit() {
    let customValue = parseFloat($('#valor').val());
  
    // Validar o valor mínimo de 5
    if (customValue < 5) {
      alert('O valor mínimo é 5. Alterando para 5.');
      customValue = 5;
      $('#valor').val(customValue);
    }
  
    const formData = new FormData($('#enviarPagamento')[0]);
    formData.set('valor', customValue);
  
    $.ajax({
      url: base_url + 'ezze/criarQrCode',
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function (data) {
        const valor = parseFloat(data.valor); // Convertendo para número
  
        // Configurar o src do QR code com a URI de dados em base64
        const qrCodeImg = document.getElementById('qrcode');
        qrCodeImg.src = `data:image/png;base64, ${data.qrcode}`;
        qrCodeImg.alt = `QR Code para pagamento de R$ ${valor.toFixed(2)}`;
  
        // Adicionando o texto do código de pagamento em um elemento
        $('#qrCodeTexto').val(data.code);
  
        $('#modalValor').text(`Valor: R$ ${valor.toFixed(2)}`);
        $('#qrCodeModal').modal('show');
      },
      error: function (error) {
        console.error('Erro ao fazer o POST:', error);
        alert('Erro ao processar o pagamento. Tente novamente mais tarde.');
      }
    });
  }
  $(document).ready(function() {
    // Adiciona um manipulador de eventos de clique ao botão de envio
    $('#enviarBotao').click(function(event) {
      event.preventDefault(); // Previne o envio padrão do formulário

      // Chama a função deposit() que contém o script jQuery
      deposit();
    });
  });
  function copyTextToClipboard(text) {
    // Create a textarea element to hold the text
    const textArea = document.createElement('textarea');
    textArea.value = text;
  
    // Append the textarea to the document
    document.body.appendChild(textArea);
  
    // Select the text in the textarea
    textArea.select();
  
    // Copy the selected text to the clipboard
    document.execCommand('copy');
  
    // Remove the temporary textarea
    document.body.removeChild(textArea);
  }

  let isPaymentApproved = false; // Variável de controle para verificar se o pagamento foi aprovado

function checkPaymentStatus() {
  const url = base_url + 'ezze/statusPix';

  fetch(url)
    .then(response => response.json())
    .then(data => {
      if (data.status === 'pago') {
        $('#qrCodeModal').modal('hide');
        $('#successModal').modal('show');
        isPaymentApproved = true; // Definir como true quando o pagamento for aprovado
      }
    })
    .catch(error => console.error('Erro ao fazer a requisição:', error));
}

// Chamar a função inicialmente
checkPaymentStatus();

// Chamar a função a cada 5 segundos, mas parar quando o pagamento for aprovado
const intervalId = setInterval(() => {
  if (!isPaymentApproved) {
    checkPaymentStatus();
  } else {
    clearInterval(intervalId); // Parar de chamar a função quando o pagamento for aprovado
  }
}, 5000);
  