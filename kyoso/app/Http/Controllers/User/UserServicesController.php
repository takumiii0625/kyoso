<?php

namespace App\Http\Controllers\User;

use App\Enums\PerPage;
use App\Enums\PublishList;
use App\Enums\ServiceList;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Libraries\Utils;
use App\Http\Requests\Office\News\CreateRequest;
use App\Http\Requests\Office\News\EditRequest;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserServicesController extends Controller
{
    /**
     * サービス一覧
     *
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {


        return view('user/services/show');
    }
}
