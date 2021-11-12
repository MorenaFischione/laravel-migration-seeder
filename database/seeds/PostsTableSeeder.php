<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                "title" => "L’AQUILA, TECNOPOLO D’ABRUZZO: NASCE SCIENTIFICA LAB, PROGETTO A SOSTEGNO DEI GIOVANI RICERCATORI",
                "post_content" => "L’AQUILA – Supportare idee e tecnologie innovative dei giovani ricercatori: questo lo scopo di “Scientifica Lab”, uno spazio nato per sostenere le iniziative di startup in seno alla ricerca scientifica.
                Alla conferenza stampa di presentazione, questa mattina, sono intervenuti il direttore del Tecnopolo d’Abruzzo dell’Aquila, Roberto Romanelli, l’assessore regionale, Guido Liris, il sindaco Pierluigi Biondi, Riccardo D’Alessandri per Scientifica e il professor Fabio Graziosi, in rappresentanza del rettore dell’Università dell’Aquila, Edoardo Alesse.
                Un progetto ambizioso ed innovativo, il cui primo obiettivo sarà finanziare le prime 5 startup che vorranno proporsi entro la fine dell’anno; un primo passo per un ulteriore salto di qualità nell’anno 2022.
                La proposta di Scientifica Lab induce ad accettare un parallelo, all’apparenza poco attinente, tra scienza e imprenditoria; in veste di incubatore, Scientifica assisterà ogni aspirante nel suo percorso, dalla ricerca alla gestione e valorizzazione del prodotto. Tra le occupazioni principali, dunque, la consulenza manageriale e le attività di marketing.",
                "post_date"=> "2021/11/11",
                'author' => 'Eugenio Bianco',
            ],
            [
                "title" => "L’AQUILA, FONDAZIONE OPEN",
                "post_content" => "Anche una chat su Whatsapp per seguire l’iter delle norme favorevoli a Toto costruzioni, con scambi di messaggi tra Luca Lotti, ai tempi sottosegretario alla Presidenza del Consiglio e segretario del Cipe, Alfonso Toto, referente del gruppo, e l’avvocato Alberto Bianchi, ex presidente della fondazione Open.
                È quanto sostengono gli investigatori della guardia di finanza in una delle informative finite agli atti dell’inchiesta della procura di Firenze su Open, la fondazione nata per sostenere le iniziative politiche di Matteo Renzi.",
                "post_date"=> "2021/11/08",
                'author' => 'Eugenio Fiore',
            ],
            [
                "title" => "CENTRO NAZIONALE SERVIZIO CIVILE A L’AQUILA, PROVVEDIMENTO INSERITO NELLA BOZZA FINANZIARIA",
                "post_content" => "L’AQUILA – Nella bozza della Manovra finanziaria 2022,  salita a 219 articoli e da oltre 30 miliardi, è prevista la nascita del Centro nazionale del servizio civile universale, con sede a L’Aquila.

                ”Per sostenere le finalità e gli obiettivi assegnati al servizio civile universale e assicurare anche la compiuta realizzazione del progetto di potenziamento del servizio medesimo previsto nell’ambito del Piano nazionale di ripresa e resilienza, è istituito il Centro nazionale del servizio civile universale, con sede nel comune dell’Aquila”, si legge nella bozza.  Previsto un investimento di 5 milioni di euro l’anno a decorrere dal 2022 e la scuola avrà una dotazione di 2500 alloggi, utilizzando le palazzine del",
                "post_date"=> "2021/11/05",
                'author' => 'Francesco Fiore',
            ],
            
        ];

        foreach($posts as $post){

            $newPost = new Post();

            //METODO MANUALE
            $newPost->title = $post['title'];
            $newPost->author = $post['author'];
            $newPost->post_date = $post['post_date'];
            $newPost->post_content = $post['post_content'];

            //METODO FILLABLE --> Ricordarsi la proprietà fillable del model
            // $newPost->fill($post);

            $newPost->slug = Str::slug($post['title'], "-");
            $newPost->save();

        }
    }   
}
