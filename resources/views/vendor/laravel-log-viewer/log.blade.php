@extends('admin.layouts.logs')

@section('title',__('admin.logs-title'))

@section('content')
    @include('admin.includes.title')
    <div class="row">
        <div class="col sidebar mb-3">
            <div class="list-group">
                @foreach($files as $file)
                    <a href="?l={{ \Illuminate\Support\Facades\Crypt::encrypt($file) }}"
                       class="list-group-item @if ($current_file == $file) llv-active @endif">
                        {{$file}}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-10 table-container">
            @if ($logs === null)
                <div>
                    {{ __('admin.logs-text') }}
                </div>
            @else
                <table id="table-log" class="table table-striped" data-ordering-index="{{ $standardFormat ? 2 : 0 }}">
                    <thead>
                    <tr>
                        @if ($standardFormat)
                            <th>{{ __('admin.logs-level') }}</th>
                            <th>{{ __('admin.logs-context') }}</th>
                            <th>{{ __('admin.logs-date') }}</th>
                        @else
                            <th>{{ __('admin.logs-line-number') }}</th>
                        @endif
                        <th>{{ __('admin.logs-content') }}</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($logs as $key => $log)
                        <tr data-display="stack{{{$key}}}">
                            @if ($standardFormat)
                                <td class="text-{{{$log['level_class']}}}"><span class="fa fa-{{{$log['level_img']}}}"
                                                                                 aria-hidden="true"></span>
                                    &nbsp;{{$log['level']}}</td>
                                <td class="text">{{$log['context']}}</td>
                            @endif
                            <td class="date">{{{$log['date']}}}</td>
                            <td class="text">
                                @if ($log['stack'])
                                    <button type="button"
                                            class="float-right expand btn btn-outline-dark btn-sm mb-2 ml-2"
                                            data-display="stack{{{$key}}}"><span
                                                class="fa fa-search"></span></button>@endif
                                {{{$log['text']}}}
                                @if (isset($log['in_file'])) <br/>{{{$log['in_file']}}}@endif
                                @if ($log['stack'])
                                    <div class="stack" id="stack{{{$key}}}"
                                         style="display: none; white-space: pre-wrap;">{{{ trim($log['stack']) }}}
                                    </div>@endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
            <div class="p-3">
                @if($current_file)
                    <a href="?dl={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}"><span
                                class="fa fa-download"></span>
                        {{ __('admin.logs-download-file') }}</a>
                    -
                    <a id="delete-log" href="?del={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}"><span
                                class="fa fa-trash"></span> {{ __('admin.logs-delete-file') }}</a>
                    @if(count($files) > 1)
                        -
                        <a id="delete-all-log" href="?delall=true"><span
                                    class="fa fa-trash"></span> {{ __('admin.logs-delete-all-files') }}</a>
                    @endif
                @endif
            </div>
        </div>
    </div>

@endsection
