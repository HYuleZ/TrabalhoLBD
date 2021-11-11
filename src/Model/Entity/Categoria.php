<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Categoria Entity
 *
 * @property int $id
 * @property int $livro_id
 * @property int $menu_id
 * @property int $usuario_id
 * @property int|null $paginas_lidas
 * @property string|null $tipo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Livro $livro
 * @property \App\Model\Entity\Menu $menu
 * @property \App\Model\Entity\Usuario $usuario
 */
class Categoria extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'livro_id' => true,
        'menu_id' => true,
        'usuario_id' => true,
        'paginas_lidas' => true,
        'tipo' => true,
        'created' => true,
        'modified' => true,
        'livro' => true,
        'menu' => true,
        'usuario' => true,
    ];
}
