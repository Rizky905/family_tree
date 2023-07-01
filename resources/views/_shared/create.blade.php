@extends('skeleton')

@section('content')
<div class="main-content">
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Add data '. Request::segment(1)) }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                @php
                    $fieldRequired = [];
                @endphp
                <form action="{{ url(Request::segment(1)) }}" method="POST" role="form text-left" id="formValidate" enctype="multipart/form-data">
                    @csrf
                    @foreach ($forms as $form)
                        {{-- <x-forms.text
                            name="{{$form['name']}}"
                            label="{{$form['label']}}"
                            :isRequired="true"
                        /> --}}

                        @php
                            if ($form['required']) {
                                $fieldRequired[$form['name']] = $form['label'];
                            }
                            $componentName = 'forms.'.$form['type'];
                        @endphp

                        <x-dynamic-component :component="$componentName"
                            name="{{$form['name']}}"
                            label="{{$form['label']}}"
                            isRequired="{{$form['required']}}"
                            column="{{$form['column']}}"
                            placeholder="{{$form['placeholder']}}"
                        />
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>
@php
    // echo '<pre>';
    // print_r($fieldRequired);
    // exit;
@endphp
<input type="hidden" id="filed-required" value='@json($fieldRequired)'>

@endsection
