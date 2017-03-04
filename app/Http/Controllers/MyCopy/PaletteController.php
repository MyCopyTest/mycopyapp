<?php

namespace App\Http\Controllers\MyCopy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaletteController extends Controller
{
    const PALETTE_NOME = 'nome', PALETTE_HEXADECIMAL = 'hexadecimal';
    const COR_BRANCA = 'white', COR_PRETA = 'black';

    public function materialDesign()
    {
        $cores = array(
                    array('nome' => 'red',                          'hexadecimal' => 'f44336', 'text-color' => self::COR_BRANCA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'ffebee', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'ffcdd2', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'ef9a9a', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => 'e57373', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => 'ef5350', 'text-color' => self::COR_BRANCA),
                            array('nome' => '500',                  'hexadecimal' => 'f44336', 'text-color' => self::COR_BRANCA),
                            array('nome' => '600',                  'hexadecimal' => 'e53935', 'text-color' => self::COR_BRANCA),
                            array('nome' => '700',                  'hexadecimal' => 'd32f2f', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => 'c62828', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => 'b71c1c', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => 'ff8a80', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => 'ff5252', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A400',                 'hexadecimal' => 'ff1744', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A700',                 'hexadecimal' => 'd50000', 'text-color' => self::COR_BRANCA)
                        )
                    ),

                    array('nome' => 'pink',                         'hexadecimal' => 'e91e63', 'text-color' => self::COR_BRANCA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'fce4ec', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'f8bbd0', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'f48fb1', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => 'f06292', 'text-color' => self::COR_BRANCA),
                            array('nome' => '400',                  'hexadecimal' => 'ec407a', 'text-color' => self::COR_BRANCA),
                            array('nome' => '500',                  'hexadecimal' => 'e91e63', 'text-color' => self::COR_BRANCA),
                            array('nome' => '600',                  'hexadecimal' => 'd81b60', 'text-color' => self::COR_BRANCA),
                            array('nome' => '700',                  'hexadecimal' => 'c2185b', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => 'ad1457', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => '880e4f', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => 'ff80ab', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => 'ff4081', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A400',                 'hexadecimal' => 'f50057', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A700',                 'hexadecimal' => 'c51162', 'text-color' => self::COR_BRANCA)
                        )
                    ),

                    array('nome' => 'purple',                       'hexadecimal' => '9c27b0', 'text-color' => self::COR_BRANCA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'f3e5f5', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'e1bee7', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'ce93d8', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => 'ba68c8', 'text-color' => self::COR_BRANCA),
                            array('nome' => '400',                  'hexadecimal' => 'ab47bc', 'text-color' => self::COR_BRANCA),
                            array('nome' => '500',                  'hexadecimal' => '9c27b0', 'text-color' => self::COR_BRANCA),
                            array('nome' => '600',                  'hexadecimal' => '8e24aa', 'text-color' => self::COR_BRANCA),
                            array('nome' => '700',                  'hexadecimal' => '7b1fa2', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => '6a1b9a', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => '4a148c', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => 'ea80fc', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => 'e040fb', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A400',                 'hexadecimal' => 'd500f9', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A700',                 'hexadecimal' => 'aa00ff', 'text-color' => self::COR_BRANCA)
                        )
                    ),

                    array('nome' => 'deep-purple',                  'hexadecimal' => '673ab7', 'text-color' => self::COR_BRANCA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'ede7f6', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'd1c4e9', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'b39ddb', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => '9575cd', 'text-color' => self::COR_BRANCA),
                            array('nome' => '400',                  'hexadecimal' => '7e57c2', 'text-color' => self::COR_BRANCA),
                            array('nome' => '500',                  'hexadecimal' => '673ab7', 'text-color' => self::COR_BRANCA),
                            array('nome' => '600',                  'hexadecimal' => '5e35b1', 'text-color' => self::COR_BRANCA),
                            array('nome' => '700',                  'hexadecimal' => '512da8', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => '4527a0', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => '311b92', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => 'b388ff', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => '7c4dff', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A400',                 'hexadecimal' => '651fff', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A700',                 'hexadecimal' => '6200ea', 'text-color' => self::COR_BRANCA)
                        )
                    ),

                    array('nome' => 'indigo',                       'hexadecimal' => '3f51b5', 'text-color' => self::COR_BRANCA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'e8eaf6', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'c5cae9', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => '9fa8da', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => '7986cb', 'text-color' => self::COR_BRANCA),
                            array('nome' => '400',                  'hexadecimal' => '5c6bc0', 'text-color' => self::COR_BRANCA),
                            array('nome' => '500',                  'hexadecimal' => '3f51b5', 'text-color' => self::COR_BRANCA),
                            array('nome' => '600',                  'hexadecimal' => '3949ab', 'text-color' => self::COR_BRANCA),
                            array('nome' => '700',                  'hexadecimal' => '303f9f', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => '283593', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => '1a237e', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => '8c9eff', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => '536dfe', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A400',                 'hexadecimal' => '3d5afe', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A700',                 'hexadecimal' => '304ffe', 'text-color' => self::COR_BRANCA)
                        )
                    ),

                    array('nome' => 'blue',                         'hexadecimal' => '2196f3', 'text-color' => self::COR_BRANCA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'e3f2fd', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'bbdefb', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => '90caf9', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => '64b5f6', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => '42a5f5', 'text-color' => self::COR_PRETA),
                            array('nome' => '500',                  'hexadecimal' => '2196f3', 'text-color' => self::COR_BRANCA),
                            array('nome' => '600',                  'hexadecimal' => '1e88e5', 'text-color' => self::COR_BRANCA),
                            array('nome' => '700',                  'hexadecimal' => '1976d2', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => '1565c0', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => '0d47a1', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => '82b1ff', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => '448aff', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A400',                 'hexadecimal' => '2979ff', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A700',                 'hexadecimal' => '2962ff', 'text-color' => self::COR_BRANCA)
                        )
                    ),

                    array('nome' => 'light-blue',                   'hexadecimal' => '03a9f4', 'text-color' => self::COR_PRETA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'e1f5fe', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'b3e5fc', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => '81d4fa', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => '4fc3f7', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => '29b6f6', 'text-color' => self::COR_PRETA),
                            array('nome' => '500',                  'hexadecimal' => '03a9f4', 'text-color' => self::COR_PRETA),
                            array('nome' => '600',                  'hexadecimal' => '039be5', 'text-color' => self::COR_BRANCA),
                            array('nome' => '700',                  'hexadecimal' => '0288d1', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => '0277bd', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => '01579b', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => '80d8ff', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => '40c4ff', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A400',                 'hexadecimal' => '00b0ff', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A700',                 'hexadecimal' => '0091ea', 'text-color' => self::COR_BRANCA)
                        )
                    ),

                    array('nome' => 'cyan',                         'hexadecimal' => '00bcd4', 'text-color' => self::COR_PRETA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'e0f7fa', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'b2ebf2', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => '80deea', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => '4dd0e1', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => '26c6da', 'text-color' => self::COR_PRETA),
                            array('nome' => '500',                  'hexadecimal' => '00bcd4', 'text-color' => self::COR_PRETA),
                            array('nome' => '600',                  'hexadecimal' => '00acc1', 'text-color' => self::COR_PRETA),
                            array('nome' => '700',                  'hexadecimal' => '0097a7', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => '00838f', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => '006064', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => '84ffff', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => '18ffff', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A400',                 'hexadecimal' => '00e5ff', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A700',                 'hexadecimal' => '00b8d4', 'text-color' => self::COR_PRETA)
                        )
                    ),

                    array('nome' => 'teal',                         'hexadecimal' => '009688', 'text-color' => self::COR_BRANCA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'e0f2f1', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'b2dfdb', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => '80cbc4', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => '4db6ac', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => '26a69a', 'text-color' => self::COR_PRETA),
                            array('nome' => '500',                  'hexadecimal' => '009688', 'text-color' => self::COR_BRANCA),
                            array('nome' => '600',                  'hexadecimal' => '00897b', 'text-color' => self::COR_BRANCA),
                            array('nome' => '700',                  'hexadecimal' => '00796b', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => '00695c', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => '004d40', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => 'a7ffeb', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => '64ffda', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A400',                 'hexadecimal' => '1de9b6', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A700',                 'hexadecimal' => '00bfa5', 'text-color' => self::COR_PRETA)
                        )
                    ),

                    array('nome' => 'green',                        'hexadecimal' => '4caf50', 'text-color' => self::COR_PRETA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'e8f5e9', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'c8e6c9', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'a5d6a7', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => '81c784', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => '66bb6a', 'text-color' => self::COR_PRETA),
                            array('nome' => '500',                  'hexadecimal' => '4caf50', 'text-color' => self::COR_PRETA),
                            array('nome' => '600',                  'hexadecimal' => '43a047', 'text-color' => self::COR_BRANCA),
                            array('nome' => '700',                  'hexadecimal' => '388e3c', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => '2e7d32', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => '1b5e20', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => 'b9f6ca', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => '69f0ae', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A400',                 'hexadecimal' => '00e676', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A700',                 'hexadecimal' => '00c853', 'text-color' => self::COR_PRETA)
                        )
                    ),

                    array('nome' => 'light-green',                  'hexadecimal' => '8bc34a', 'text-color' => self::COR_PRETA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'f1f8e9', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'dcedc8', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'c5e1a5', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => 'aed581', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => '9ccc65', 'text-color' => self::COR_PRETA),
                            array('nome' => '500',                  'hexadecimal' => '8bc34a', 'text-color' => self::COR_PRETA),
                            array('nome' => '600',                  'hexadecimal' => '7cb342', 'text-color' => self::COR_PRETA),
                            array('nome' => '700',                  'hexadecimal' => '689f38', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => '558b2f', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => '33691e', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => 'ccff90', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => 'b2ff59', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A400',                 'hexadecimal' => '76ff03', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A700',                 'hexadecimal' => '64dd17', 'text-color' => self::COR_PRETA)
                        )
                    ),

                    array('nome' => 'lime',                         'hexadecimal' => 'cddc39', 'text-color' => self::COR_PRETA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'f9fbe7', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'f0f4c3', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'e6ee9c', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => 'dce775', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => 'd4e157', 'text-color' => self::COR_PRETA),
                            array('nome' => '500',                  'hexadecimal' => 'cddc39', 'text-color' => self::COR_PRETA),
                            array('nome' => '600',                  'hexadecimal' => 'c0ca33', 'text-color' => self::COR_PRETA),
                            array('nome' => '700',                  'hexadecimal' => 'afb42b', 'text-color' => self::COR_PRETA),
                            array('nome' => '800',                  'hexadecimal' => '9e9d24', 'text-color' => self::COR_PRETA),
                            array('nome' => '900',                  'hexadecimal' => '827717', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => 'f4ff81', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => 'eeff41', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A400',                 'hexadecimal' => 'c6ff00', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A700',                 'hexadecimal' => 'aeea00', 'text-color' => self::COR_PRETA)
                        )
                    ),

                    array('nome' => 'yellow',                       'hexadecimal' => 'ffeb3b', 'text-color' => self::COR_PRETA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'fffde7', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'fff9c4', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'fff59d', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => 'fff176', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => 'ffee58', 'text-color' => self::COR_PRETA),
                            array('nome' => '500',                  'hexadecimal' => 'ffeb3b', 'text-color' => self::COR_PRETA),
                            array('nome' => '600',                  'hexadecimal' => 'fdd835', 'text-color' => self::COR_PRETA),
                            array('nome' => '700',                  'hexadecimal' => 'fbc02d', 'text-color' => self::COR_PRETA),
                            array('nome' => '800',                  'hexadecimal' => 'f9a825', 'text-color' => self::COR_PRETA),
                            array('nome' => '900',                  'hexadecimal' => 'f57f17', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A100',                 'hexadecimal' => 'ffff8d', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => 'ffff00', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A400',                 'hexadecimal' => 'ffea00', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A700',                 'hexadecimal' => 'ffd600', 'text-color' => self::COR_PRETA)
                        )
                    ),

                    array('nome' => 'amber',                        'hexadecimal' => 'ffc107', 'text-color' => self::COR_PRETA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'fff8e1', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'ffecb3', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'ffe082', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => 'ffd54f', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => 'ffca28', 'text-color' => self::COR_PRETA),
                            array('nome' => '500',                  'hexadecimal' => 'ffc107', 'text-color' => self::COR_PRETA),
                            array('nome' => '600',                  'hexadecimal' => 'ffb300', 'text-color' => self::COR_PRETA),
                            array('nome' => '700',                  'hexadecimal' => 'ffa000', 'text-color' => self::COR_PRETA),
                            array('nome' => '800',                  'hexadecimal' => 'ff8f00', 'text-color' => self::COR_PRETA),
                            array('nome' => '900',                  'hexadecimal' => 'ff6f00', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A100',                 'hexadecimal' => 'ffe57f', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => 'ffd740', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A400',                 'hexadecimal' => 'ffc400', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A700',                 'hexadecimal' => 'ffab00', 'text-color' => self::COR_PRETA)
                        )
                    ),

                    array('nome' => 'orange',                       'hexadecimal' => 'ff9800', 'text-color' => self::COR_PRETA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'fff3e0', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'ffe0b2', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'ffcc80', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => 'ffb74d', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => 'ffa726', 'text-color' => self::COR_PRETA),
                            array('nome' => '500',                  'hexadecimal' => 'ff9800', 'text-color' => self::COR_PRETA),
                            array('nome' => '600',                  'hexadecimal' => 'fb8c00', 'text-color' => self::COR_PRETA),
                            array('nome' => '700',                  'hexadecimal' => 'f57c00', 'text-color' => self::COR_PRETA),
                            array('nome' => '800',                  'hexadecimal' => 'ef6c00', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => 'e65100', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => 'ffd180', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => 'ffab40', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A400',                 'hexadecimal' => 'ff9100', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A700',                 'hexadecimal' => 'ff6d00', 'text-color' => self::COR_PRETA)
                        )
                    ),

                    array('nome' => 'deep-orange',                  'hexadecimal' => 'ff5722', 'text-color' => self::COR_BRANCA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'fbe9e7', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'ffccbc', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'ffab91', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => 'ff8a65', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => 'ff7043', 'text-color' => self::COR_PRETA),
                            array('nome' => '500',                  'hexadecimal' => 'ff5722', 'text-color' => self::COR_BRANCA),
                            array('nome' => '600',                  'hexadecimal' => 'f4511e', 'text-color' => self::COR_BRANCA),
                            array('nome' => '700',                  'hexadecimal' => 'e64a19', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => 'd84315', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => 'bf360c', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A100',                 'hexadecimal' => 'ff9e80', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A200',                 'hexadecimal' => 'ff6e40', 'text-color' => self::COR_PRETA),
                            array('nome' => 'A400',                 'hexadecimal' => 'ff3d00', 'text-color' => self::COR_BRANCA),
                            array('nome' => 'A700',                 'hexadecimal' => 'dd2c00', 'text-color' => self::COR_BRANCA)
                        )
                    ),

                    array('nome' => 'brown',                        'hexadecimal' => '795548', 'text-color' => self::COR_BRANCA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'efebe9', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'd7ccc8', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'bcaaa4', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => 'a1887f', 'text-color' => self::COR_BRANCA),
                            array('nome' => '400',                  'hexadecimal' => '8d6e63', 'text-color' => self::COR_BRANCA),
                            array('nome' => '500',                  'hexadecimal' => '795548', 'text-color' => self::COR_BRANCA),
                            array('nome' => '600',                  'hexadecimal' => '6d4c41', 'text-color' => self::COR_BRANCA),
                            array('nome' => '700',                  'hexadecimal' => '5d4037', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => '4e342e', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => '3e2723', 'text-color' => self::COR_BRANCA)
                        )
                    ),

                    array('nome' => 'grey',                         'hexadecimal' => '9e9e9e', 'text-color' => self::COR_PRETA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'fafafa', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'f5f5f5', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'eeeeee', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => 'e0e0e0', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => 'bdbdbd', 'text-color' => self::COR_PRETA),
                            array('nome' => '500',                  'hexadecimal' => '9e9e9e', 'text-color' => self::COR_PRETA),
                            array('nome' => '600',                  'hexadecimal' => '757575', 'text-color' => self::COR_BRANCA),
                            array('nome' => '700',                  'hexadecimal' => '616161', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => '424242', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => '212121', 'text-color' => self::COR_BRANCA)
                        )
                    ),

                    array('nome' => 'blue-grey',                    'hexadecimal' => '607d8b', 'text-color' => self::COR_BRANCA, 'cores' => array(
                            array('nome' => '50',                   'hexadecimal' => 'eceff1', 'text-color' => self::COR_PRETA),
                            array('nome' => '100',                  'hexadecimal' => 'cfd8dc', 'text-color' => self::COR_PRETA),
                            array('nome' => '200',                  'hexadecimal' => 'b0bec5', 'text-color' => self::COR_PRETA),
                            array('nome' => '300',                  'hexadecimal' => '90a4ae', 'text-color' => self::COR_PRETA),
                            array('nome' => '400',                  'hexadecimal' => '78909c', 'text-color' => self::COR_BRANCA),
                            array('nome' => '500',                  'hexadecimal' => '607d8b', 'text-color' => self::COR_BRANCA),
                            array('nome' => '600',                  'hexadecimal' => '546e7a', 'text-color' => self::COR_BRANCA),
                            array('nome' => '700',                  'hexadecimal' => '455a64', 'text-color' => self::COR_BRANCA),
                            array('nome' => '800',                  'hexadecimal' => '37474f', 'text-color' => self::COR_BRANCA),
                            array('nome' => '900',                  'hexadecimal' => '263238', 'text-color' => self::COR_BRANCA)
                        )
                    )
                );


        return view('mycopy.palette.materialDesign', [
            'cores' => $cores
        ]);
    }
}
