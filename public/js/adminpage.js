console.log(123);

//modale script

        function aaconfirme_modal()
        {
            var modal_content;
            $("#modal_title").html("");
            $("#modal_title").append("<h2>Confirmation</h2>");

            $("#modal_cont").html("");
            $("#modal_cont").append(response);
        }
		const modal = document.querySelector('.main-modal');
		const closeButton = document.querySelectorAll('.modal-close');

		const modalClose = () => {
			modal.classList.remove('fadeIn');
			modal.classList.add('fadeOut');
			setTimeout(() => {
				modal.style.display = 'none';
			}, 500);
		}

		const openModal = () => {
			modal.classList.remove('fadeOut');
			modal.classList.add('fadeIn');
			modal.style.display = 'flex';
		}

		for (let i = 0; i < closeButton.length; i++) {

			const elements = closeButton[i];

			elements.onclick = (e) => modalClose();

			modal.style.display = 'none';

			window.onclick = function (event) {
				if (event.target == modal) modalClose();
			}
		}
// end modal script

//delet message notification script
$(".closealertbutton").click(function (e) {
    // $('.alertbox')[0].hide()
    // e.preventDefault();
    pid = $(this).parent().parent().hide(500)
    console.log(pid)
    //$(".alertbox", this).hide()
})

function addid(a) {
    // reset fields
    $('.user_id').each(function(){
        this.value = a.id;
     });
}


