<?php

namespace App\Console\Commands;

use App\Enums\ReportAction;
use App\Enums\ReportPaymentType;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class DailyReportToTelegram extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report:telegram';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $bot = config('telegram.bot');
        $groupId = config('telegram.group_id');
        $now = Carbon::now()->format('d/m/Y');
        $text = "Thu chi ngày $now:\n";
        $reportToday = Report::where('date', Carbon::now()->format('Y-m-d'))->get();
        $add = $reportToday->where('action', ReportAction::ADD)->sum('amount');

        $subCash = $reportToday->where('action', ReportAction::SUB)
            ->where('payment_type', ReportPaymentType::CASH)
            ->sum('amount');

        $subBank = $reportToday->where('action', ReportAction::SUB)
            ->where('payment_type', ReportPaymentType::BANK)
            ->sum('amount');
        $total = $add - $subBank;
        $add = number_format($add);
        $subCash = number_format($subCash);
        $subBank = number_format($subBank);
        $total = number_format($total);
        $text .= "Thu về:\n $add đ\n";
        $text .= "Chi tiêu thanh toán bằng tiền mặt:\n $subCash đ\n";
        $text .= "Chi tiêu thanh toán bằng chuyển khoản:\n $subBank đ\n";
        $text .= "Lợi nhuận hôm nay:\n $total đ\n";

        Http::get("https://api.telegram.org/bot$bot/sendMessage?chat_id=$groupId&text=$text");
    }
}
