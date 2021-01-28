@if (Session::has('message'))
<div class="container">
    <div class="alert alert-{{ Session::get('typealert') }}" style="display: none;">
        {{ Session::get('message') }}
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
        @endif
        <script>
            $('.alert').slideDown();
            setTimeout(function(){ $('.alert').slideUp(); }, 1000);
        </script>
    </div>
</div>
@endif