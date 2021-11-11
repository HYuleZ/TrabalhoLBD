<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Livro Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $autor
 * @property string|null $genero
 * @property string|null $editora
 * @property \Cake\I18n\FrozenDate $ano_publicacao
 * @property int|null $paginas
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Livro extends Entity
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
        'nome' => true,
        'autor' => true,
        'genero' => true,
        'editora' => true,
        'ano_publicacao' => true,
        'paginas' => true,
        'created' => true,
        'modified' => true,
    ];
}
