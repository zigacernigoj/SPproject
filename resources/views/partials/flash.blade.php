@if (Session::has('flash_message'))
    <div class="alert alert-success {{ Session::has('flash_message_important')? 'alert-important' : '' }}">

        @if (Session::has('flash_message_important'))
            {{-- ta gumb [x] - zapri, le ko zelimo pozornost --}}
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        @endif

        {{-- drugace lahko samo prikazemo obvestilo za 3-5 sekund in se samo umakne --}}

        {{ Session::get('flash_message') }}
    </div>
@endif