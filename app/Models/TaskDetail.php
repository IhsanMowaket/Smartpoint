<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskDetail extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'task',
        'fotos_around',
        'Kennzeichen',
        'schaden',
        'Schadenart',
        'schadenStelle',
        'schadenFoto',
        'kmStand',
        'tankWert',
        'kmStandFoto',
        'tankWertFoto',
        'fahrzeugscheinID',
        'zulassungsDatum',
        'herstellerKurzbe',
        'code22',
        'fahrzeugID',
        'farbe',
        'kraftstoff',
        'zustandA',
        'zustandI',
        'schlussel',
        'serviceHeft',
        'tankKarte',
        'verbandKasten',
        'zulassungSchein',
        'warndreieck',
        'warnweste',
        'reifen',
        'reifenzustand',
        'ersatzReifen',
        'bemerkung',
        'kundeUnterschrift',
        'mitarbeiterUnterschrift',
    ];
    protected $casts = [
        'fotos_around' => 'array',
        'schaden' => 'boolean',
        'reifenzustand' => 'array',
        'bemerkung' => 'array',
        'zulassungsDatum' => 'datetime',
        'serviceHeft' => 'boolean',
        'tankKarte' => 'boolean',
        'verbandKasten' => 'boolean',
        'zulassungSchein' => 'boolean',
        'warndreieck' => 'boolean',
        'warnweste' => 'boolean',
        'ersatzReifen' => 'boolean',
        // Add any other necessary casts
    ];
    


        public function task(): BelongsTo
        {
            return $this->belongsTo(Task::class, 'task');
        }
    
}
