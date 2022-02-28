    @if(Route::current()->getName() != 'home')
            @php
                $link = url('/');
            @endphp
            <a href="/"><i class="fa fa-home"></i> Home</a><i class="fa fa-chevron-right"  style="padding: 2px 10px;"></i>
            <?php $link = "" ?>
            @for($i = 1; $i <= count(Request::segments()); $i++)
                @if($i < count(Request::segments()) & $i > 0)
                    <?php $link .= "/" . Request::segment($i); ?>
                    <a href="<?= $link ?>">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a> <i
                            class="fa fa-chevron-right" style="padding: 2px 10px;"></i>
                @else {{ucwords(str_replace('-',' ',Request::segment($i)))}}
                @endif
            @endfor
    @endif
    <style>
        ul#breadcrumb a {
            color: #fff;
            font-size: 13px;
        }
    </style>