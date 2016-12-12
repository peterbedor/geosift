<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Account;
use Symfony\Component\HttpFoundation\Request;

class AuthorizeAccount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		//$account = $this->getAccount($request);
		//
		//$account = Account::where('slug', '=', $account)
		//	->activated()
		//	->first();
		//
		//if (! $account) {
		//	return abort(404);
		//}
		//
		//if ($request->user()) {
		//	if (! $request->user()->inAccount($account)) {
		//		return abort(401);
		//	}
		//}
		//
		//session(['account' => $account]);

		return $next($request);
    }

	/**
	 * @param Request $request
	 * @return bool
	 */
	private	function getAccount(Request $request)
	{
		$server = explode('.', $request->server('HTTP_HOST'));

		if (count($server) >= 3) {
			return $server[0];
		}

		return false;
	}
}
