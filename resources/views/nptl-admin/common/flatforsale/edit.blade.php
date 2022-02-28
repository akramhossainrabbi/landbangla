@extends("nptl-admin.master")
@section("title","Edit Flat for sale")
@section("content")
    @include(('nptl-admin/common/media/media_pop_up'))
    <section id="widget-grid" class="">
        <!-- row -->
        <div class="row">
            {!! Form::model($edit,["method"=>"PATCH","action"=>["Admin\Common\Flatforsales@update",$edit->id]]) !!}
            @include(("nptl-admin.common.flatforsale.form1"),
            ['f_name'=>__("common.edit"), 'btn_name'=>__("common.update")])
            {!! Form::close() !!}
        </div>
        <!-- end row -->
    </section>
@endsection