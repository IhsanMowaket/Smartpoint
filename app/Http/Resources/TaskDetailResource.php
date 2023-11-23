<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'task_id' => $this->task,
            'fotos_around' => $this->fotos_around,
            'kennzeichen' => $this->Kennzeichen,
            'schaden' => $this->schaden,
            'schadenart' => $this->Schadenart,
            'schadenstelle' => $this->schadenStelle,
            'schadenfoto' => $this->schadenFoto,
            'km_stand' => $this->kmStand,
            'tankwert' => $this->tankWert,
            'km_stand_foto' => $this->kmStandFoto,
            'tankwert_foto' => $this->tankWertFoto,
            'fahrzeugschein_id' => $this->fahrzeugscheinID,
            'zulassungsdatum' => $this->zulassungsDatum,
            'hersteller_kurzbezeichnung' => $this->herstellerKurzbe,
            'code_22' => $this->code22,
            'fahrzeug_id' => $this->fahrzeugID,
            'farbe' => $this->farbe,
            'kraftstoff' => $this->kraftstoff,
            'zustand_aussen' => $this->zustandA,
            'zustand_innen' => $this->zustandI,
            'schlüssel' => $this->schlussel,
            'serviceheft' => $this->serviceHeft,
            'tankkarte' => $this->tankKarte,
            'verbandkasten' => $this->verbandKasten,
            'zulassungsschein' => $this->zulassungSchein,
            'warndreieck' => $this->warndreieck,
            'warnweste' => $this->warnweste,
            'reifen' => $this->reifen,
            'reifenzustand' => $this->reifenzustand,
            'ersatzreifen' => $this->ersatzReifen,
            'bemerkung' => $this->bemerkung,
            'kunde_unterschrift' => $this->kundeUnterschrift,
            'mitarbeiter_unterschrift' => $this->mitarbeiterUnterschrift,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
