@extends('layouts.app')

@section('content')

    <div class="text-left">
        <a href="{{ url('sections/create') }}" class="btn btn-primary"><i class="fa fa-plus ml-2"></i>بخش جدید</a>
    </div>

    <h2 class="dinar text-center text-primary">نقشه سایت</h2>
    <hr>
    <div class="text-center p-3">
        <div class="card my-2">
            <div class="card-body bg-success text-light">
                <span class="lead">مدیریت منو</span>
            </div>
            <div class="card-footer text-left">
                <a href="{{ url('menu') }}" class="text-decoration-none mx-2 text-success"><i class="ti-pencil s-2x" title="ویرایش محتویات"></i></a>
            </div>
        </div>


        <div class="card my-2">
            <div class="card-body bg-dark text-light">
                <span class="lead">مدیریت هدر</span>
            </div>
            <div class="card-footer text-left">
                <a href="{{ url('headers/1/edit') }}" class="text-decoration-none mx-2 text-success">
                    <i class="ti-pencil s-2x" title="ویرایش محتویات"></i>
                </a>
            </div>
        </div>

        @foreach($sections as $section)

            <div class="card my-2">
                <div class="card-body bg-info text-light">
                    <span class="lead">{{ translate_section_type($section->type) }}</span>
                </div>
                <div class="card-footer text-left">
                    <a href="{{ url("sections/$section->id/edit") }}" class="text-success mx-2">
                        <i class="fa fa-pencil-alt s-1-5x" title="ویرایش "></i>
                    </a>

                    <a href="{{ url("contents/$section->id") }}" class="text-primary mx-2">
                        <i class="fa fa-edit s-1-5x" title=" ویرایش محتوا"></i>
                    </a>

                    <a href="javascript:void" class=" text-danger danger-alert mx-2" data-target="section-{{ $section->id }}">
                        <i class="fa fa-trash s-1-5x" title="حذف کردن"></i>
                    </a>
                    <form class="d-none" action="{{ url("sections/$section->id") }}" method="post" id="section-{{ $section->id }}">
                        @csrf
                        @method('DELETE')
                    </form>

                    @if($section->visible)
                        <a href="{{ url("sections/visibility/$section->id") }}" class="text-dark mx-2">
                            <i class="fa fa-eye-slash s-1-5x" title=" عدم نمایش"></i>
                        </a>
                    @else
                        <a href="{{ url("sections/visibility/$section->id") }}" class="text-warning mx-2">
                            <i class="fa fa-eye s-1-5x" title=" نمایش"></i>
                        </a>

                    @endif

                </div>
            </div>


        @endforeach


        <div class="card my-2">
            <div class="card-body bg-dark text-light">
                <span class="lead">مدیریت فوتر</span>
            </div>
            <div class="card-footer text-left">
                <a href="{{ url("footers/1/edit") }}" class="text-decoration-none mx-1 text-success"><i
                            class="ti-pencil s-2x" title="ویرایش محتویات"></i></a>


            </div>
        </div>


    </div>

@endsection

