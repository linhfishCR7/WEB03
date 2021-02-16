@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{ config('app.name') }}
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
<p class="sub align-center">© {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')</p>
<p class="sub align-center">
    148 3/2 Street, Ninh Kieu, Can Tho.
    <br>Phone: 0342 878 767 - Fax XXXX XXX XXX
    <br>Email: <a href="mailto:support@havanlinh.tech">support@havanlinh.tech</a>
</p>
@endcomponent
@endslot
@endcomponent
