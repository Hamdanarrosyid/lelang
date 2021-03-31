<style>
    .modal {
        transition: opacity 0.25s ease;
    }
    body.modal-active {
        overflow-x: hidden;
        overflow-y: visible !important;
    }
</style>

<div class="modal opacity-0 pointer-events-none absolute fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Place Bid</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <div class="flex justify-between">
                <form id="bidding-form" action="{{route('bidding.store')}}" method="POST">
                    @csrf
                    <label for="bid">Your Bid</label>
                    <input id="bid" type="number" name="bid" class="focus:outline-none border">
                </form>
            </div>

            <!--Footer-->
            <div class="flex justify-end pt-2">
                <button onclick="document.getElementById('bidding-form').submit()" class="outline-none px-4 bg-transparent py-1 rounded-lg text-gray-500 hover:bg-gray-100 hover:text-gray-800 mr-2">Place</button>
                <button class="outline-none modal-close px-4 bg-gray-500 py-1 rounded-lg text-white hover:bg-gray-800">Close</button>
            </div>

        </div>
    </div>
</div>

<script>
    const openModal = document.querySelector('.modal-open')
        openModal.addEventListener('click', (event) =>{
            event.preventDefault()
            toggleModal()
        })

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    const closeModal = document.querySelector('.modal-close')
        closeModal.addEventListener('click', toggleModal)

    document.onkeydown = (evt) =>{
        evt = evt || window.event
        let isEscape = false
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
            isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
            toggleModal()
        }
    }

    function toggleModal() {
        const body = document.querySelector('body')
        const modal = document.querySelector('.modal')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
    }
</script>
