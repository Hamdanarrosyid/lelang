<style>
    .add-modal {
        transition: opacity 0.25s ease;
    }
    body.add-modal-active {
        overflow-x: hidden;
        overflow-y: visible !important;
    }
</style>

<div class="add-modal opacity-0 pointer-events-none absolute fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="add-modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    <div class="add-modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="add-modal-content py-4 text-left px-6">
            {{$slot}}
        </div>
    </div>
</div>

<script>
    const openModal = document.querySelector('.{{$modalClass}}')
        openModal.addEventListener('click', (event) =>{
            event.preventDefault()
            toggleModal()
        })

    const overlay = document.querySelector('.add-modal-overlay')
    overlay.addEventListener('click', toggleModal)

    const closeModal = document.querySelector('.add-modal-close')
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
        const addModal = document.querySelector('.add-modal')
        addModal.classList.toggle('opacity-0')
        addModal.classList.toggle('pointer-events-none')
        body.classList.toggle('add-modal-active')
    }
</script>
