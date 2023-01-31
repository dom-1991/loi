<x-app-layout>
    <div class="container mt-3 homepage">
        <div class="row">
            <div class="col-12 mb-3">
                <h4>Thống kê</h4>
            </div>
            <form action="{{ route('reports.index') }}" method="get">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <x-input-label for="from_date" value="Từ ngày" required="false" />
                            <x-from-datepicker type="text" class="block mt-1 w-full" name="from_date" :value="old('from_date', $fromDate)" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <x-input-label for="to_date" value="Tới ngày" required="false" />
                            <x-to-datepicker type="text" class="block mt-1 w-full" name="to_date" :value="old('to_date', $toDate)" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <x-input-label for="type" value="Loại" required="false" />
                            <x-select-input id="type" class="block mt-1 w-full" :options="$types" name="type" :select="old('type')" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <x-input-label for="action" value="Thu/Chi" required="false" />
                            <x-select-input id="action" class="block mt-1 w-full" :options="$actions" name="action" :select="old('action')" />
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary mb-3">Kiểm tra</button>
                    </div>
                </div>
            </form>
            <div class="col-12">
                <div class="rounded shadow {{ $price < 0 ? 'bg-danger-50' : 'bg-success-50' }} p-3">
                    <p>Tổng: {{ number_format($price) }} đồng</p>
                </div>
            </div>

            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Ngày</th>
                        <th>Loại</th>
                        <th>Nhân viên</th>
                        <th>Số tiền</th>
                        <th>Chú thích</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                        <tr>
                            <td>{{ Carbon\Carbon::parse($report->date)->format('d/m') }}</td>
                            <td>{{ $report->type ? \App\Enums\ReportType::getLabel()[$report->type] : 'Thu nhập' }}</td>
                            <td>{{ $report->employ ? $report->employ->name : '--' }}</td>
                            <td>
                                <span class="{{ $report->action == \App\Enums\ReportAction::SUB ? 'text-danger' : 'text-success' }}">
                                    {{ $report->action == \App\Enums\ReportAction::SUB ? '-' : '+' }}{{ number_format($report->amount) }}
                                </span>
                                 đồng</td>
                            <td>{!! nl2br($report->note) !!}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                {{ $reports->withQueryString()->links() }}
            </div>
        </div>
    </div>
</x-app-layout>

