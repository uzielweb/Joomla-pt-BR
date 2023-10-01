<?php

/**
 * @package    Joomla.Language
 *
 * @copyright  (C) 2010 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt

 * @phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps

 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 */

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * pt-BR localise class.
 *
 * @since  1.6
 */
abstract class Pt_BRLocalise
{
    /**
     * Retorna os sufixos potenciais para um número específico de itens
     *
     * @param   integer  $count  O número de itens.
     *
     * @return  array  Um array de sufixos potenciais.
     *
     * @since   1.6
     */
    public static function getPluralSuffixes($count)
    {
        switch ($count) {
            case 0:
                return ['0'];

            case 1:
                return ['UM', '1'];
        }

        return ['OUTROS', 'MAIS'];
    }
}
