<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'name' => 'Throne of Secrets',
                'photo'=> 'images/books/romance1.jpg',
                'publish_date' => '2024-9-19',
                'description' => <<<EOT
                A wicked prince determined to save his kingdom.

                Gabriel Axton—infamous as the Prince of Gluttony, the self-proclaimed rake of rakes—has always lived for indulgence: in delicious food, in tantalizing women, and most of all, in the thrill of the hunt, where his love of danger can take over. But when his favorite adventure takes a deadly turn, he realizes something is very wrong in his demon court. With the clock ticking, he must turn to the only one who might uncover the truth: a journalist he has spent a decade avoiding…

                A reporter hell-bent on finding the truth.

                Adriana Saint Lucent has been on the hunt for years—if she could just report something damning enough about that no-good scoundrel Gabriel Axton, she knows others would finally see the demon as she does. But she never expected to turn up a rumor too terrifying to be believed: could the ice dragons to the north be growing restless? Drawn into the secrets of the Underworld, Adriana’s investigation leads her into the place she dreads most…Axton’s infamous court.

                A dangerous rivalry—and deliciously twisted fairy tale.

                To stop darkness from falling over their kingdom, Axton and Adriana will have to unite against an escalating danger. But with each holding tight to their own secrets, can they find the truth before it’s too late? And what will they do with an equally troubling rumor: that they might not actually hate one another, after all?
                EOT,
                'author_id' => 1,
                'genre_id' =>1

            ],
            [
                'name' => 'A Dark and Secret Magic',
                'photo'=> 'images/books/romance2.jpg',
                'publish_date' => '2024-9-20',
                'description' => <<<EOT
                Hecate Goodwin, Kate to her friends, has curated the perfect life as a hedge witch, living in a secluded cottage with only a black cat for company. She spends her days foraging herbs from the Ipswich forest, gardening, and creating tinctures to sell at the apothecary she owns. Most evenings pass without her speaking to another human being, an arrangement she quite prefers.

                Kate’s solitude is thrown into disarray when her older sister, Miranda, reaches out and asks her to host their coven’s annual Halloween gathering. The day marks the beginning of the new year for witches and is also Kate’s birthday. The pressure from her coven to make the evening memorable mounts as the event draws near. To complicate things further, a handsome man from Kate’s past turns up at her cottage, asking for sanctuary. It is Kate’s duty as a hedge witch to honor this request, much to her dismay. Matthew Cypher is no ordinary lost soul–he’s a practitioner of forbidden magic who’s tricked Kate once before, and her guard is up.

                As she juggles Matthew’s arrival and the preparations for Halloween, Kate comes across an old tome shrouded in dark magic. She is horrified when she realizes the blood-red inscription is written in familiar handwriting: her recently deceased mother’s. Afraid to even touch the dark magic her mother secretly studied, Kate can turn only to Matthew for help. Her idealized memory of her mother begins to distort, and as she and Matthew grow closer, Kate has to reevaluate whom she can really trust.

                A Dark and Secret Magic is a celebration of the Halloween season and a love letter to anyone who drinks pumpkin spice in August and carries the spirit of a witch inside their heart all year long.
                EOT,
                'author_id' => 2,
                'genre_id' =>1
            ],
            [
                'name' => 'Heir',
                'photo'=> 'images/books/romance3.jpg',
                'publish_date' => '2024-10-1',
                'description' => <<<EOT
                Growing up in the Kegari slums, AIZ has seen her share of suffering. An old tragedy fuels her need for vengeance, but it is love of her people that propels her. Until one hotheaded mistake lands her in an inescapable prison, where the embers of her wrath ignite.

                Banished from her people for an unforgivable crime, SIRSHA is a down-on-her-luck tracker who uses magic to trace her marks. Destitute, she agrees to hunt down a killer who has murdered children across the Martial Empire. All she has to do is carry out the job and get paid. But when a chance encounter leads to an unexpected attraction, Sirsha learns her mission might cost her far more than she's willing to give up.

                QUIL is the crown prince of the Empire and nephew of a venerated empress, but he’s loath to take the throne when his aunt steps down. As the son of a reviled emperor, he, better than anyone, understands that power corrupts. When a vicious new enemy threatens the survival of the Empire, Quil must ask himself if he can rise above his tragic lineage and be the heir his people need.

                Beloved storyteller Sabaa Tahir interweaves the lives of three young people as they grapple with power, treachery, love, and the devastating consequences of unchecked greed, on a journey that may cost them their lives―and their hearts. Literally.
                EOT,
                'author_id' => 3,
                'genre_id' =>1
            ],
            [
                'name' => 'For She Is Wrath',
                'photo'=> 'images/books/romance4.jpg',
                'publish_date' => '2024-10-29',
                'description' => <<<EOT
                Three hundred and sixty-four days.
                Framed for a crime she didn't commit, Dania counts down her days in prison until she can exact revenge on Mazin, the boy responsible for her downfall, the boy she once loved—and still can't forget. When she discovers a fellow prisoner may have the key to exacting that vengeance--a stolen djinn treasure--they execute a daring escape together and search for the hidden treasure.

                Armed with dark magic and a new identity, Dania enacts a plan to bring down those who betrayed her and her family, even though Mazin stands in her way. But seeking revenge becomes a complicated game of cat and mouse, especially when an undeniable fire still burns between them, and the power to destroy her enemies has a price. As Dania falls deeper into her web of traps and lies, she risks losing her humanity to her fight for vengeance--and her heart to the only boy she's ever loved.
                EOT,
                'author_id' => 4,
                'genre_id' =>1
            ],
            [
                'name' => 'Noodle & Bao',
                'photo'=> 'images/books/comic1.jpg',
                'publish_date' => '2024-10-15',
                'description' => <<<EOT
                Momo has lived in Town 99 her entire life. She knows all its quirks and rhythms: the best places to buy fruit, practice tai-chi in the park, and, most of all, get the best meal: Noodle & Bao, run by Momo's best friend, Bao, and their amah, Noodle.

                But Town 99 is changing. Rent is becoming unaffordable for Momo and her parents, and even Noodle & Bao has been edged out of its storefront, which was just recently bought out by a new business venture--Fancé Cafe. Fancé is run by the ambitious Ms. Jujube and her henchmen, who claim they're only beautifying Town 99 with good business.

                Momo knows that's not true, and knows that if she doesn't do something, she'll lose everything she loves about her neighborhood. From undercover recon to a cook-off proposal, protest signs to petitions, Momo and Bao are on a mission to protect Town 99. Will they succeed before it's too late?
                EOT,
                'author_id' => 5,
                'genre_id' =>2
            ],
            [
                'name' => 'Your Throne, Vol. 1',
                'photo'=> 'images/books/comic2.jpg',
                'publish_date' => '2020-11-4',
                'description' => <<<EOT
                Tensions are brewing under the seemingly calm surface of the Vasilios Empire, a kingdom ruled by the Imperial Family and the Temple. Lady Medea Solon has lost her place next to Crown Prince Eros but resolves to do whatever it takes to win back what's rightfully hers. However, she’ll have to rewrite her entire revenge plan when she wakes up in the body of her sworn rival.
                EOT,
                'author_id' => 6,
                'genre_id' =>2
            ],
            [
                'name' => 'Your Throne, Vol. 2',
                'photo'=> 'images/books/comic3.jpg',
                'publish_date' => '2021-5-24',
                'description' => <<<EOT
                The second volume of the hit series, "I Want to Be You for Just One Day," which is causing a "Hanedo" craze. The truth surrounding the crown princess competition, Psyche's secret, and the true identity of the enemy are revealed. Medea, who fought against the assassins sent by Iaros in Psyche's body, defeats all the enemies but eventually falls down with a fatal wound. Medea, who was on the verge of death, enters the realm of the gods and catches a glimpse of Psyche's past, realizing who her true enemy is. Meanwhile, Medea, who was growing cold, opens her eyes miraculously at the moment when Psyche's blood drops fell on her...! Includes the single-volume side story, "Living in the Basement."
                EOT,
                'author_id' => 6,
                'genre_id' =>2
            ],
        ];

        DB::table('books')->insert($books);
    }
}
