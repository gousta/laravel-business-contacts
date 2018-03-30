@extends('layouts.app', ['pageTitle' => $client->name .' ' . $client->surname])

@push('vendorstyles')
  <link href="/assets/vendors/bower_components/chosen/chosen.css" rel="stylesheet">
@endpush

@push('backbutton')
  <li>
    <ul class="hi-menu">
      <li>
        <a href="{{ route('client.index') }}"><i class="him-icon zmdi zmdi-arrow-left"></i></a>
      </li>
    </ul>
  </li>
@endpush

@push('actionbutton')
  <li>
    <a href="{{ route('client.edit', $client->id) }}"><i class="him-icon zmdi zmdi-edit"></i></a>
  </li>
@endpush

@section('content')
  <div style="background: #1a237e;margin: -16px -15px -40px -15px;padding: 30px 46px 70px">
    <div class="">
      <div class="c-white m-b-5">
        <i class="zmdi zmdi-phone p-r-5 p-t-4 pull-left"></i>
        <a class="c-white" href="tel:{{ $client->phone or '' }}">{{ $client->phone or '-' }}</a>
      </div>
      <div class="c-white">
        <i class="zmdi zmdi-email p-r-5 p-t-5 pull-left"></i>
        <a class="c-white" href="mailto:{{ $client->email or '' }}">{{ $client->email or '-' }}</a>
      </div>
    </div>
  </div>


    <div class="card">
      <div class="card-body card-padding f-400 c-gray">
        {!! $client->notes ? nl2br($client->notes):'Δεν υπάρχουν σημειώσεις' !!}
      </div>
    </div>
@stop

@push('scripts')
  <script src="/assets/vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      
      // 

    });
  </script>
@endpush