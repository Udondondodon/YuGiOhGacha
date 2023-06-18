@extends('layouts.main')
@extends('partials.navbar')

<div>
  <section style="background-color: #001b35">
    <div class="flex items-center justify-center px-6 py-8 md:h-screen lg:py-0">
      <div class="w-96 rounded-lg max-w-md bg-gray-800">
        <div class="p-4 space-y-4 items-center flex justify-center mt-5">
          <button class="font-bold text-2xl bg-sky-600 hover:bg-sky-800 text-white rounded-xl p-2 px-10 w-48" id="increaseGemsBtn">Grind</button>
        </div>
        <div class="p-4 space-y-4 items-center flex justify-center">
          <a href="/gacha">
            <button class="font-bold text-2xl bg-sky-600 hover:bg-sky-800 text-white rounded-xl p-2 px-10 w-48">
              Gacha
            </button>
          </a>
        </div>
        <div class="p-4 space-y-4 items-center flex justify-center mb-5">
          <a href="/inventory">
            <button class="font-bold text-2xl bg-sky-600 hover:bg-sky-800 text-white rounded-xl p-2 px-10 w-48">
              Collection
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