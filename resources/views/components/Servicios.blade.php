<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .card {
        border: none;
        transition: transform 0.2s;
    }
    .card:hover {
        transform: scale(1.05);
    }
    .card img {
        border-top-left-radius: calc(.25rem - 1px);
        border-top-right-radius: calc(.25rem - 1px);
    }
    .discount-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: red;
        color: white;
        padding: 5px;
        border-radius: 0 0 0 10px;
    }
    .card-title {
        color: purple;
    }
    .card-text {
        color: purple;
    }
    .btn-whatsapp {
        background-color: #59bb40;
        color: white;
    }
    .btn-details {
        background-color: #007bff;
        color: white;
    }
    .show-more {
        color: blue;
        cursor: pointer;
    }
</style>

<div class="container">
    <div class="row">
        @foreach($services as $service)
            @if($service->status !== 'Inactivo')
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-img-top position-relative">
                            <img src="{{ $service->photo }}" alt="{{ $service->name }}" class="img-fluid">
                            @if($service->status === 'Oferta')
                                <div class="discount-badge">
                                    {{ $service->discount_percentage }}% de descuento
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->name }}</h5>
                            <p class="card-text">
                                {{ Str::limit($service->description, 100, '...') }}
                                <span class="show-more" onclick="showMore(this)">más</span>
                                <span class="full-text" style="display:none;">{{ $service->description }}</span>
                            </p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="https://api.whatsapp.com/send?phone=7224958550&amp;text=Me%20gustaría%20saber%20más%20sobre%20{{ $service->name }}" class="btn btn-whatsapp">
                                    <i class="fab fa-whatsapp"></i> Agenda
                                </a>
                                <a href="{{ route('service.detail', ['id' => $service->id]) }}" class="btn btn-details">
                                    <i class="fas fa-info-circle"></i> Ver detalles
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>

<script>
    function showMore(element) {
        let fullText = element.nextElementSibling;
        if (fullText.style.display === "none") {
            fullText.style.display = "inline";
            element.innerText = "menos";
        } else {
            fullText.style.display = "none";
            element.innerText = "más";
        }
    }
</script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
