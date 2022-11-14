<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbproduto')->insert(
            array(
                [
                    'nomeProduto' => 'Bathory - The return……',
                    'valorProduto' => 75,
                    'fotoProduto' => 'bathory-return.jpg',
                    'descricaoProduto' => 'The Return…… é o segundo álbum de estúdio da banda sueca de metal extremo Bathory. Foi lançado em vinil em 27 de maio de 1985, pela Combat Records nos EUA. The Return...... teve uma influência significativa no desenvolvimento dos gêneros black metal e death metal.',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Bathory - Self titled',
                    'valorProduto' => 75,
                    'fotoProduto' => 'bathory-self.jpg',
                    'descricaoProduto' => 'athory é o álbum de estreia da banda sueca de metal extremo Bathory. Foi lançado em outubro de 1984, pela Tyfon Grammofon. É considerado por fãs e críticos como um dos candidatos ao primeiro disco de black metal.',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Black Sabbath - Self titled',
                    'valorProduto' => 75,
                    'fotoProduto' => 'black-sabbath.jpg',
                    'descricaoProduto' => 'Black Sabbath é o álbum de estreia lançado pela banda inglesa do mesmo nome, lançado em 1970. Ainda que não tenha recebido muita atenção na época de seu lançamento, Black Sabbath tem sido, desde então, considerado como um dos discos mais importantes para o desenvolvimento do heavy metal.',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Burzum - Hvis Lyset Tar Oss',
                    'valorProduto' => 75,
                    'fotoProduto' => 'burzum-hvis.jpg',
                    'descricaoProduto' => 'Hvis lyset tar oss é o terceiro álbum de estúdio do projeto solo norueguês de black metal Burzum. Foi gravado em setembro de 1992, mas não foi lançado até abril de 1994, quando foi lançado pela Misanthropy Records e pela própria gravadora de Vikernes, Cymophane Productions.',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Celtic Frost - Morbid tales',
                    'valorProduto' => 75,
                    'fotoProduto' => 'celtic-morbid.png',
                    'descricaoProduto' => 'Morbid Tales é o primeiro álbum de estúdio da banda de metal extremo suíça Celtic Frost. O disco foi uma das maiores influências para o desenvolvimento do black metal e death metal',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Celtic Frost - Into the pandemonium',
                    'valorProduto' => 75,
                    'fotoProduto' => 'celtic-pandemonium.jpg',
                    'descricaoProduto' => 'Into the Pandemonium é o segundo álbum de estúdio da banda suíça de metal extremo Celtic Frost, lançado em 1987. É o primeiro álbum a apresentar o baixista e backing vocal Martin Eric Ain, que apareceu no EP Morbid Tales de 1984, mas não no álbum anterior da banda.',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Darkthrone - Panzerfaust',
                    'valorProduto' => 75,
                    'fotoProduto' => 'Darkthrone-Panzerfaust.jpg',
                    'descricaoProduto' => 'Panzerfaust é o quinto álbum de estúdio da banda norueguesa de black metal Darkthrone, lançado em junho de 1995 pela Moonfog Productions e The End Records. A faixa "Quintessence" contou com letras de Varg Vikernes, seu segundo e último álbum a fazê-lo.',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Darkthrone - Transilvanian Hunger',
                    'valorProduto' => 75,
                    'fotoProduto' => 'darkthrone-transilvanian-hunger.jpg',
                    'descricaoProduto' => 'ransilvanian Hunger é o quarto álbum de estúdio da banda de black metal Darkthrone. Foi lançado em 17 de fevereiro de 1994, pela Peaceville Records. O álbum é considerado um clássico do black metal norueguês, sendo citado como um dos mais influentes do gênero.',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Emperor - Wrath of the Tyrant',
                    'valorProduto' => 75,
                    'fotoProduto' => 'emperor-ep.jpg',
                    'descricaoProduto' => 'Wrath of the Tyrant é o primeiro álbum demo da banda norueguesa de black metal Emperor. Foi gravado em maio de 1992 e lançado pela banda logo depois. ',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Hellhammer - Satanic Rites',
                    'valorProduto' => 75,
                    'fotoProduto' => 'hellhammer.jpg',
                    'descricaoProduto' => 'Satanic Rites é a terceira e última fita demo da banda suíça de metal extremo Hellhammer. Foi gravado e distribuído em dezembro de 1983. Junto com outros lançamentos do Hellhammer, teve uma grande influência nos gêneros emergentes de death metal e black metal.',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Judas Priest - PainKiller',
                    'valorProduto' => 75,
                    'fotoProduto' => 'Judaspainkiller.jpeg',
                    'descricaoProduto' => 'Painkiller é o décimo segundo álbum de estúdio da banda Judas Priest, lançado em 3 de setembro de 1990. Foi o primeiro trabalho lançado pela banda de heavy metal depois da troca de baterista; Scott Travis entrou no lugar de Dave Holland. O resto da banda, porém, se manteve inalterado: Glenn Tipton e K.K.',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Mayhem - De mysteriis dom Sathanas',
                    'valorProduto' => 75,
                    'fotoProduto' => 'mayhem-de-mysteris.jpg',
                    'descricaoProduto' => 'De Mysteriis Dom Sathanas é o primeiro álbum completo de estúdio da banda norueguesa de Black Metal Mayhem. As composições iniciaram-se em 1987, mas devido ao suicídio do vocalista Per "Dead" Ohlin e o assassinato do guitarrista Øystein "Euronymous" Aarseth, o lançamento do disco só ocorreu em 24 de maio de 1994.',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Metallica - Master of Puppets',
                    'valorProduto' => 75,
                    'fotoProduto' => 'metallica.jpg',
                    'descricaoProduto' => 'Master of Puppets é o terceiro álbum de estúdio lançado pela banda de thrash metal/heavy metal norte-americana Metallica, lançado em 3 de março de 1986 pela Elektra Records e o último álbum da banda com o baixista Cliff Burton, que morreu em um acidente de autocarro na Suécia enquanto estava em uma turnê para promover o álbum.',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Morbid - Domination',
                    'valorProduto' => 75,
                    'fotoProduto' => 'morbid-domination.jpg',
                    'descricaoProduto' => 'Domination é o quarto álbum de estúdio da banda de death metal Morbid Angel, lançado em 1995. Este foi o último álbum do Morbid Angel sob o selo Giant Records antes do selo deixar a banda. A banda então re-assinou com sua antiga gravadora, Earache Records.',
                    'idCategoria' => 1,
                ],
                [
                    'nomeProduto' => 'Motörhead - Self titled',
                    'valorProduto' => 75,
                    'fotoProduto' => 'motorhead.jpg',
                    'descricaoProduto' => 'Motörhead é o primeiro álbum de estúdio da banda britânica de rock Motörhead, lançado em 21 de agosto de 1977 pela Chiswick Records, um dos primeiros da gravadora, e seu único lançamento pela Chiswick.',
                    'idCategoria' => 1,

                ],
                [
                    'nomeProduto' => 'Nargaroth - Black metal ist Krieg',
                    'valorProduto' => 75,
                    'fotoProduto' => 'nargaroth-black.jpg',
                    'descricaoProduto' => 'Black Metal ist Krieg é o terceiro álbum completo da banda de black metal Nargaroth. O título completo do álbum é Black Metal ist Krieg: A Dedication Monument, e pretendia ser uma homenagem aos primeiros músicos de black metal.',
                    'idCategoria' => 1,

                ],
                [
                    'nomeProduto' => 'Sadistik Exekution - The magus',
                    'valorProduto' => 75,
                    'fotoProduto' => 'sadistik.jpg',
                    'descricaoProduto' => 'O álbum de estreia de Sadistik Exekution. Este álbum foi originalmente gravado em fevereiro de 1988 e, em seguida, foi lançado em 1991 por uma gravadora com sede em Sydney chamada Vampire Records. As músicas foram remasterizadas por The Undertaker. O álbum foi projetado por Herman Kovac.',
                    'idCategoria' => 1,

                ],
                [
                    'nomeProduto' => 'Sarcofago - The Laws of Scourge',
                    'valorProduto' => 75,
                    'fotoProduto' => 'sarcofago.jpg',
                    'descricaoProduto' => 'The Laws of Scourge é o segundo álbum de estúdio da banda brasileira de metal extremo Sarcófago. Foi neste álbum que o conteúdo lírico da banda mudou do satanismo para um assunto mais realista',
                    'idCategoria' => 1,

                ],
                [
                    'nomeProduto' => 'Sepultura - Arise',
                    'valorProduto' => 75,
                    'fotoProduto' => 'sepultura.jpg',
                    'descricaoProduto' => 'Arise é o quarto álbum de estúdio da banda brasileira de thrash metal Sepultura, lançado em 25 de março de 1991 pela Roadrunner Records. Após o seu lançamento, o álbum recebeu críticas positivas de revistas de heavy metal como a Hard Rock, a Kerrang! e a Metal Forces. ',
                    'idCategoria' => 1,

                ],
                [
                    'nomeProduto' => 'Slayer - Show no Mercy',
                    'valorProduto' => 75,
                    'fotoProduto' => 'slayer.jpg',
                    'descricaoProduto' => 'Show No Mercy é o álbum de estreia da banda norte-americana de thrash metal Slayer, foi lançado em 3 dezembro de 1983 pela Metal Blade Records. Brian Slagel contratou o Slayer para a Metal Blade depois de os ter visto a tocar a canção "Phantom of the Opera", um original de Iron Maiden.',
                    'idCategoria' => 1,

                ],
                [
                    'nomeProduto' => 'S.O.D - Speak English or Die',
                    'valorProduto' => 75,
                    'fotoProduto' => 'sod-english.jpeg',
                    'descricaoProduto' => 'Speak English or Die é o álbum de estreia da banda americana de crossover thrash Stormtroopers of Death, lançado em agosto de 1985.',
                    'idCategoria' => 1,

                ],
                [
                    'nomeProduto' => 'S.O.D - Bigger than the Devil',
                    'valorProduto' => 75,
                    'fotoProduto' => 'sod.jpg',
                    'descricaoProduto' => 'Bigger than the Devil é o segundo álbum da banda de crossover thrash Stormtroopers of Death. O álbum foi lançado em maio de 1999 pela gravadora Nuclear Blast.',
                    'idCategoria' => 1,

                ],
                [
                    'nomeProduto' => 'Sodom - In the sign of Evil',
                    'valorProduto' => 75,
                    'fotoProduto' => 'sodom.jpg',
                    'descricaoProduto' => 'In the Sign of Evil é o primeiro EP e o lançamento de estreia da banda de thrash metal da Alemanha Ocidental Sodom, lançado em 1985 pela gravadora independente Devils Game. O disco é considerado parte da primeira onda do black metal. ',
                    'idCategoria' => 1,

                ],
                [
                    'nomeProduto' => 'Venom - Black metal',
                    'valorProduto' => 75,
                    'fotoProduto' => 'venom-black.jpg',
                    'descricaoProduto' => 'Black Metal é o segundo álbum da banda inglesa de heavy metal Venom. Foi lançado em novembro de 1982, durante o grande florescimento do metal no Reino Unido que foi a nova onda do heavy metal britânico, e é considerao uma grande influencia na cena thrash metal, death metal e black metal',
                    'idCategoria' => 1,

                ],
                [
                    'nomeProduto' => 'Venom - Welcome to hell',
                    'valorProduto' => 75,
                    'fotoProduto' => 'venom-hell.jpg',
                    'descricaoProduto' => 'Welcome to Hell é o álbum de estreia da banda inglesa de metal extremo Venom. Foi lançado em dezembro de 1981, pela Neat Records, no auge da nova onda do movimento britânico de heavy metal. O álbum foi relançado pela Sanctuary Records em 2002.',
                    'idCategoria' => 1,

                ],
            )
        );
    }
}
