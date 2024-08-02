@extends("base")

@section("content")
<div class="max-w-7xl mx-auto mt-5">
    <h1 class="text-3xl">IMMO AGENCE</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi deserunt ipsum repellendus, corporis enim animi eveniet! Incidunt dolores molestias obcaecati dolorem esse veritatis quos quisquam, modi iure repudiandae explicabo temporibus fuga blanditiis ipsam rem a delectus repellendus reprehenderit, accusamus accusantium ea. Explicabo laboriosam vero neque beatae distinctio ab magni, modi debitis nesciunt rem natus dolor odit. Ex, accusamus! Veritatis officia odit quos eius esse quibusdam architecto porro consectetur atque. Consequatur ipsum quae iste tempore! Quod quis fugit enim vel vitae error itaque recusandae exercitationem repellendus officia illum nulla, cupiditate dolorem porro rem est et impedit natus ad reiciendis. Deserunt, inventore.</p>
</div>

<div class="max-w-7xl mx-auto mt-10">
    <h2 class="text-2xl text-center w-full">Nos derniers biens</h2>
    <div class="flex justify-between gap-2 mt-4">
        @foreach($properties as $property)

        @include("property.card")

        @endforeach
    </div>

</div>

@endsection
