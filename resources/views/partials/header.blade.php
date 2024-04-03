<header class="bg-slate-800 w-full h-16">
    <div class="flex items-center justify-between h-full">
        <div class="text-white">
           <div class="ms-5">
                <a href="/dashboard" class="flex items-center gap-3 justify-center">
                    <img src="{{ asset('images/iconn.png') }}" alt="Main Logo" class="w-12 hidden md:block">
                    <h1 class="font-bold tracking-wide text-gray-200">ABC Company</h1>
                </a>
           </div>
        </div>

        <div class="hidden md:block">
            <h6 class="text-slate-100 me-5">
               Hi <strong>{{session()->get('user')->name}}</strong>
            </h6>
        </div>

        <div class="me-5 text-xl block md:hidden cursor-pointer text-slate-100" id="btn-burger">
            <i id="btn-icon" class="fa-solid fa-bars"></i>
        </div>

    </div>
</header>

<div class="h-screen w-full bg-black bg-opacity-25 absolute z-10 hidden md:hidden" id="right-sidebar">
    <div class="bg-white w-1/3 h-screen float-right">
        @include('partials.navs')
    </div>
</div>

@section('js')
    <script>
        $(document).ready(function() {
            let sidebar = $("#right-sidebar");
            $("#btn-burger").on('click',function() {
                sidebar.toggleClass('hidden');

                if($("#btn-icon").hasClass('fa-solid fa-bars')) {
                    $("#btn-icon").removeClass("fa-solid fa-bars");
                    $("#btn-icon").addClass("fa-solid fa-xmark");
                } else {
                    $("#btn-icon").removeClass("fa-solid fa-xmark");
                    $("#btn-icon").addClass("fa-solid fa-bars");
                }
            });
        });
    </script>
@endsection