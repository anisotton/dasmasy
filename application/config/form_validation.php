<?php
$config = array(
                'alunoMaior' =>
                        array(
                            array(
                                'field'=>'nome',
                                'label'=>'Nome',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'dataNasc',
                                'label'=>'Data Nascimento',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'cpf',
                                'label'=>'CPF',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'rg',
                                'label'=>'RG',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'sexo',
                                'label'=>'Sexo',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'naturalidade',
                                'label'=>'Naturalidade',
                                'rules'=>'required|trim'
                            ),array(
                                'field'=>'nascionalidade',
                                'label'=>'Nascionalidade',
                                'rules'=>'required|trim'
                            ),array(
                                'field'=>'tel_fixo',
                                'label'=>'Telefone fixo',
                                'rules'=>'trim'
                            ),array(
                                'field'=>'tel_celular',
                                'label'=>'Telefone celular',
                                'rules'=>'trim'
                            ),
                            array(
                                'field'=>'email',
                                'label'=>'Email',
                                'rules'=>'trim|valid_email'
                            ),
                        ),
                 'alunoMenor' =>
                        array(
                            array(
                                'field'=>'nome',
                                'label'=>'Nome',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'dataNasc',
                                'label'=>'Data Nascimento',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'sexo',
                                'label'=>'Sexo',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'naturalidade',
                                'label'=>'Naturalidade',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'nascionalidade',
                                'label'=>'Nascionalidade',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'id_responsavel',
                                'label'=>'Responsavel',
                                'rules'=>'required|trim'
                            ),
                        ),
                'responsaveis' =>
                        array(
                            array(
                                'field'=>'nome',
                                'label'=>'Nome',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'cpf',
                                'label'=>'CPF',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'rg',
                                'label'=>'RG',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'sexo',
                                'label'=>'Sexo',
                                'rules'=>'required|trim'
                            ),
                            array(
                                'field'=>'tel_fixo',
                                'label'=>'Telefone fixo',
                                'rules'=>'trim'
                            ),
                            array(
                                'field'=>'tel_celular',
                                'label'=>'Telefone celular',
                                'rules'=>'trim'
                            ),
                            array(
                                'field'=>'email',
                                'label'=>'Email',
                                'rules'=>'trim|valid_email'
                            ),
                        ),
                );
			   