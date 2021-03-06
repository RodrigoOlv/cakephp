<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pagina Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $conteudo
 * @property string $url
 * @property int $categoria_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Categoria $categoria
 */
class Pagina extends Entity
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
        'titulo' => true,
        'conteudo' => true,
        'url' => true,
        'categoria_id' => true,
        'created' => true,
        'modified' => true,
        'categoria' => true
    ];
}
