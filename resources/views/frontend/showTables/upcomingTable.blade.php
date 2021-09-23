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
                <h5>{{ $upcoming->date }}</h5>
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
                <h5>{{ $upcoming->place_name }} - {{ $upcoming->address }}</h5>
            </th>
        </tr>
        @if ($upcoming->start_time)
            <tr class="d-flex justify-content-center">
                <th class="col-md-3 d-flex justify-content-end align-items-center">
                    <h5>Kezdés</h5>
                </th>
                <th class="col-md-1 d-flex justify-content-center">
                    <i class="bi bi-lightning" style="font-size: 1.5rem;"></i>
                </th>
                <th class="col-md-8 d-flex justify-content-start align-items-center">
                    <h5>{{ $upcoming->start_time }}</h5>
                </th>
            </tr>
        @endif
        @if ($upcoming->link)
            <tr class="d-flex justify-content-center">
                <th class="col-md-3 d-flex justify-content-end align-items-center">
                    <h5>Online</h5>
                </th>
                <th class="col-md-1 d-flex justify-content-center">
                    <i class="bi bi-lightning" style="font-size: 1.5rem;"></i>
                </th>
                <th class="col-md-8 d-flex justify-content-start align-items-center">
                    <h5><a href="{{ $upcoming->link }}">Online</a></h5>
                </th>
            </tr>
        @endif
        @if ($upcoming->additional_info)
            <tr class="d-flex justify-content-center">
                <th class="col-md-3 d-flex justify-content-end align-items-center">
                    <h5>További infó</h5>
                </th>
                <th class="col-md-1 d-flex justify-content-center">
                    <i class="bi bi-lightning" style="font-size: 1.5rem;"></i>
                </th>
                <th class="col-md-8 d-flex justify-content-start align-items-center">
                    <h5>{{ $upcoming->additional_info }}</h5>
                </th>
            </tr>
        @endif
        @if ($upcoming->ticket)
            <tr class="d-flex justify-content-center">
                <th class="col-md-3 d-flex justify-content-end align-items-center">
                    <h5>Jegyelővétel</h5>
                </th>
                <th class="col-md-1 d-flex justify-content-center">
                    <i class="bi bi-lightning" style="font-size: 1.5rem;"></i>
                </th>
                <th class="col-md-8 d-flex justify-content-start align-items-center">
                    <h5>{{ $upcoming->ticket }}</h5>
                </th>
            </tr>
        @endif
    </tbody>
</table>
