@extends('layouts.main')
@extends('partials.navbar')

<div>
  <section class="" style="background-color: #001b35">
    <div class="flex items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-auto bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-3 space-y-4">
          <h1 class="text-xl font-bold md:text-2xl text-white text-center">Choose Beetwen One Of This</h1>
        </div>
        <div class="p-4 space-y-4 items-center flex justify-center">
          <button class="text-xl font-bold md:text-2xl bg-sky-600 hover:bg-sky-800 text-white rounded-xl p-2 px-10" id="increaseGemsBtn">Grind</button>
        </div>
        <div class="p-4 space-y-4 items-center flex justify-center">
          <a href="/gacha">
            <button class="text-xl font-bold md:text-2xl bg-sky-600 hover:bg-sky-800 text-white rounded-xl p-2 px-10">
              Gacha
            </button>
          </a>
        </div>
        <div class="p-4 space-y-4 items-center flex justify-center">
          <a href="/inventory">
            <button class="text-xl font-bold md:text-2xl bg-sky-600 hover:bg-sky-800 text-white rounded-xl p-2 px-10">
              Card Collection
            </button>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>

@section('scripts')
    
<script>
  $(document).ready(function() {
  $('#increaseGemsBtn').click(function() {
    $.ajax({
      url: '/increase',
      type: 'get',
      dataType: 'json',
      success: function(response) {
        if (response.success) {
          var currentGems = parseInt(response.gems);
          var currentGems = response.gems;
          var newGems = currentGems + 1000;
          $('.gems-value').text(parseInt(newGems));
          var message = "Gems berhasil ditambahkan";
          alert(message);
          window.location.href = "/dashboard";
        }
      }
    });
  });
});
</script>
@endsection