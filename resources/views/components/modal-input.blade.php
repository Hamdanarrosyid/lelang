<style>
    .modal-{{$id}} {
        transition: opacity 0.25s ease;
    }
    body.modal-active-{{$id}} {
        overflow-x: hidden;
        overflow-y: visible !important;
    }
</style>

<div class="modal-{{$id}} opacity-0 pointer-events-none absolute fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay-{{$id}} absolute w-full h-full bg-gray-900 opacity-50"></div>
    <div class="modal-container-{{$id}} bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content-{{$id}} py-4 text-left px-6">
            {{$slot}}
        </div>
    </div>
</div>

<script>
    const openModal{{$id}} = document.querySelector('.{{$modalClass}}')
    openModal{{$id}}.addEventListener('click', (event) =>{
        event.preventDefault()
        toggleModal{{$id}}()
    })

    const overlay{{$id}} = document.querySelector('.modal-overlay-{{$id}}')
    overlay{{$id}}.addEventListener('click', toggleModal{{$id}})

    const closeModal{{$id}} = document.querySelector('.modal-close-{{$id}}')
    closeModal{{$id}}.addEventListener('click', toggleModal{{$id}})

    document.onkeydown = (evt) =>{
        evt = evt || window.event
        let isEscape = false
        if ("key" in evt) {
            isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
            isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active-{{$id}}')) {
            toggleModal{{$id}}()
        }
    }

    function toggleModal{{$id}}() {
        const body{{$id}} = document.querySelector('body')
        const addModal{{$id}} = document.querySelector('.modal-{{$id}}')
        addModal{{$id}}.classList.toggle('opacity-0')
        addModal{{$id}}.classList.toggle('pointer-events-none')
        body{{$id}}.classList.toggle('modal-active-{{$id}}')
    }
</script>
