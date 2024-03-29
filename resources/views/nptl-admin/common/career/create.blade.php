@extends(('nptl-admin/master'))
@section('title','Add Career')
@section('content')
   @include(('nptl-admin/common/media/media_pop_up'))
<section id="widget-grid" class="">

   <!-- row -->
   <div class="row">

      {!! Form::open(["method"=>"post","action"=>"Admin\Common\Careers@store"]) !!}
      @include(("nptl-admin/common/career/form"),
      ['f_name'=>__("common.add"), 'btn_name'=>__("common.save")])
      {!! Form::close() !!}

   </div>

   <!-- end row -->

</section>
@endsection