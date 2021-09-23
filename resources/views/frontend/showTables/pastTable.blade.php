<table class="table table-borderless table-hover align-middle">
    <tbody>
        <tr class="d-flex justify-content-center">
            <th class="col-md-3 d-flex justify-content-end align-items-center">
                <h5>Dátum</h5>
            </th>
            <th class="col-md-1 d-flex justify-content-center">
                <i class="bi bi-lightning" style="font-size: 1.5rem;"></i>
            </th>
            <th class="col-md-8 d-flex justify-content-start align-items-center">
                <h5>{{ $past->date }}</h5>
            </th>
        </tr>
        <tr class="d-flex justify-content-center">
            <th class="col-md-3 d-flex justify-content-end align-items-center">
                <h5>Helyszín</h5>
            </th>
            <th class="col-md-1 d-flex justify-content-center">
                <i class="bi bi-lightning" style="font-size: 1.5rem;"></i>
            </th>
            <th class="col-md-8 d-flex justify-content-start align-items-center">
                <h5>{{ $past->place_name }} - {{ $past->address }}</h5>
            </th>
        </tr>
        @if ($past->start_time)
            <tr class="d-flex justify-content-center">
                <th class="col-md-3 d-flex justify-content-end align-items-center">
                    <h5>Kezdés</h5>
                </th>
                <th class="col-md-1 d-flex justify-content-center">
                    <i class="bi bi-lightning" style="font-size: 1.5rem;"></i>
                </th>
                <th class="col-md-8 d-flex justify-content-start align-items-center">
                    <h5>{{ $past->start_time }}</h5>
                </th>
            </tr>
        @endif
        @if ($past->link)
            <tr class="d-flex justify-content-center">
                <th class="col-md-3 d-flex justify-content-end align-items-center">
                    <h5>Online</h5>
                </th>
                <th class="col-md-1 d-flex justify-content-center">
                    <i class="bi bi-lightning" style="font-size: 1.5rem;"></i>
                </th>
                <th class="col-md-8 d-flex justify-content-start align-items-center">
                    <h5><a href="{{ $past->link }}">Online</a></h5>
                </th>
            </tr>
        @endif
        @if ($past->additional_info)
            <tr class="d-flex justify-content-center">
                <th class="col-md-3 d-flex justify-content-end align-items-center">
                    <h5>További infó</h5>
                </th>
                <th class="col-md-1 d-flex justify-content-center">
                    <i class="bi bi-lightning" style="font-size: 1.5rem;"></i>
                </th>
                <th class="col-md-8 d-flex justify-content-start align-items-center">
                    <h5>{{ $past->additional_info }}</h5>
                </th>
            </tr>
        @endif
        @if ($past->ticket)
            <tr class="d-flex justify-content-center">
                <th class="col-md-3 d-flex justify-content-end align-items-center">
                    <h5>Jegyelővétel</h5>
                </th>
                <th class="col-md-1 d-flex justify-content-center">
                    <i class="bi bi-lightning" style="font-size: 1.5rem;"></i>
                </th>
                <th class="col-md-8 d-flex justify-content-start align-items-center">
                    <h5>{{ $past->ticket }}</h5>
                </th>
            </tr>
        @endif
    </tbody>
</table>
