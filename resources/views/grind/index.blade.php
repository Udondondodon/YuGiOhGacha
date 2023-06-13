@extends('layouts.main')
@extends('partials.navbar')

@section('content')    
<div>
  <section class="h-screen" style="background-color: #001b35">
    <div class="flex items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div>
       <button class="text-xl font-bold md:text-2xl bg-sky-600 hover:bg-sky-800 text-white rounded-xl p-2 px-10" id="increaseGemsBtn">Hello</button>
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
          var message = "Gems 1000 berhasil ditambahkan";
          alert(message);

          window.location.href = "/grind";
        }
      }
    });
  });
});
</script>
@endsection
@endsection