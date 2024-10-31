<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Our Services') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
<!-- --> 
                
                
                <head>
                    
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
                    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
                </head>
                <body>

                <div class="container mt-5">
                    

                    @php
                    $totalQuantity = 0;
                    @endphp

                    @if(session('cart'))
                    @foreach(session('cart') as $item)
                        @php
                        $totalQuantity += $item['quantity'];
                        @endphp
                    @endforeach
                    @endif

                    <div class="col-12">
                        <div class="dropdown" >
                            <a class="btn btn-outline-dark" href="{{ url('cart-list') }}">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge text-bg-danger" id="cart-quantity">{{ $totalQuantity }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container mt-4">
                    @if(session('success'))
                        <div class="alert alert-success">
                        {{ session('success') }}
                        </div>
                    @endif
                    @yield('content')
                </div>

                @yield('scripts')
                </body>
                
<!-- -->
            </div>
        </div>
    </div>
</x-app-layout>
