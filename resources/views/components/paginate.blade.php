@if($data->hasPages())
    <div class="flex col gap--2 align--center p--5">
        <div hx-boost="true" class="flex row gap--4 align--center justify--center gap--1">
            <a @class(['btn btn--small p--1', $data->onFirstPage() ? 'btn--disabled' : '']) {{ $data->onFirstPage() ? '' : 'href=' . $data->previousPageUrl() }} > << </a>
            <p class="text--s">
                {{ $data->currentPage() }} sur {{ $data->lastPage() }}
            </p>
            <a @class(['btn btn--small p--1', $data->onLastPage() ? 'btn--disabled' : '']) {{ $data->onLastPage() ? '' : 'href=' . $data->nextPageUrl() }} > >> </a>
        </div>
        <p class="text--s">{{ $data->perPage() }} résultats par page</p>
    </div>
@endif
