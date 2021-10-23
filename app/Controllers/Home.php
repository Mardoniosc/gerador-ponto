<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() {
        return view('home');
    }

    public function cadastrar() {

        if($this->request->getMethod() == 'post') {
            $entrada = explode( ':', $this->request->getPost('entrada'));
            $saida = explode( ':', $this->request->getPost('saida'));
            $almoco = explode( ':', $this->request->getPost('almoco'));

            $totalHorasTrabalhadas = $saida[0] - $entrada[0];
            if($totalHorasTrabalhadas <= 0) {
                return redirect()->to('home')->with('info', "O horário de entrada não pode ser igual ou superior ao horário de saida!");
            }

            /* Horário de almoço */
            $minutoVarianteAlmoco = rand(1,9);
            $horarioSaidaAlmoco = $entrada[0] + (($saida[0] - $entrada[0]) / 2) - 1;
            $horarioEntradaAlmoco = $horarioSaidaAlmoco + $almoco[0];
            

            $data['entrada_2'] = sprintf('%02d:%02d:00',$horarioEntradaAlmoco, $minutoVarianteAlmoco);
            $data['saida_1'] = sprintf('%02d:%02d:00',$horarioSaidaAlmoco, $minutoVarianteAlmoco);

            /* Horário de entrada e saída */
            $minutoVariante = rand(1,9);
            
            $data['entrada_1'] = sprintf('%02d:%02d:00',$entrada[0], $minutoVariante);
            $data['saida_2'] = sprintf('%02d:%02d:00',$saida[0], $minutoVariante);

            return view('home', $data);
        }

        return view('home');
    }
}