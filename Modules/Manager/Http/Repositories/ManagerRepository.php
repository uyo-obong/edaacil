<?php

namespace Edaacil\Modules\Manager\Http\Repositories;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Edaacil\Modules\BaseRepository;
use Edaacil\Modules\Manager\Http\Models\Certificate;
use Edaacil\Modules\Manager\Http\Models\Manager;

class ManagerRepository extends BaseRepository
{

    /**
     * @return string
     */
    function model()
    {
        return Manager::class;
    }


    public function dashboard()
    {
        $today_sales = Certificate::whereDate('created_at', today())->count();
        $sales_1_day_ago = Certificate::whereDate('created_at', today()->subDays(1))->count();
        $sales_2_days_ago = Certificate::whereDate('created_at', today()->subDays(2))->count();
        $sales_7_days_ago = Certificate::whereDate('created_at', today()->subDays(7))->count();
        $sales_14_days_ago = Certificate::whereDate('created_at', today()->subDays(14))->count();
        $sales_21_days_ago = Certificate::whereDate('created_at', today()->subDays(21))->count();

        $chart = new Chart();

        $chart->labels(['3 weeks ago', '2 weeks ago', '1 week ago', '2 days ago', 'yesterday', 'Today']);
        $chart->dataset('Total Sales', 'line', [$sales_21_days_ago, $sales_14_days_ago, $sales_7_days_ago, $sales_2_days_ago, $sales_1_day_ago, $today_sales])->backgroundcolor(collect(["#e47297"]));
        $chart->options( [
            'scales' => [
                'xAxes' => [],
                'yAxes' => [
                    [
                        'ticks' => [
                            'stepSize' => 5,
                        ],
                    ],
                ],
            ],
        ]);

        return $chart;
    }

}