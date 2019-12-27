<?php

namespace Edaacil\Modules\Manager\Http\Controllers;

use Edaacil\Modules\BaseController;
use Edaacil\Modules\Manager\Http\Repositories\TokenRepository;
use Edaacil\Modules\Manager\Http\Requests\GenerateTokenRequest;

class TokenController extends BaseController
{

    /**
     * @var array|\Illuminate\Http\Request|string
     */
    private $_config;

    /**
     * @var TokenRepository
     */
    private $tokenRepository;


    /**
     * TokenController constructor.
     * @param TokenRepository $tokenRepository
     */
    public function __construct(TokenRepository $tokenRepository)
    {
        $this->_config = request('_config');
        $this->tokenRepository = $tokenRepository;
    }

    /**
     * List available tokens
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list()
    {
        $tokens = $this->tokenRepository->model()::all()->sortByDesc('created_at');
        return view($this->_config['view'], ['tokens' => $tokens]);
    }

    /**
     * Return the tokens that has been generated
     * @param GenerateTokenRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function createToken(GenerateTokenRequest $request)
    {
        $token = $this->tokenRepository->createToken($request->all());
        if ($token)
            return redirect(route('manager.token.list'));
    }
}
