<x-layout :title="$title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-primary">{{ $title }}</h1>
            </div>
        </div>
                        
        <div class="row justify-content-center">

            @foreach ($services as $service)

                <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $service['name'] }}</h5>
                                <p class="card-text">{{ $service['description'] }}</p>
                            </div>
                        <div class="card-footer bg-transparent border-top-0 pb-3">
                            <a href="{{ route('service.detail', ['slug' => $service['slug']]) }}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
                
            @endforeach

        </div>
    </div>

</x-layout>