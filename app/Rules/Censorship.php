<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Session;

class Censorship implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Banned words
        $words = array("@$$","13?","2 girls 1 cup","2g1c","3p","4r5e","5h1t","5hit","a_s_s","a55","aardappels afgieteng","aborto","achter het raam zitten","acrotomophilia","afberen","aflebberen","afrossen","afrukken","aftrekken","afwerkplaats","afzeiken","afzuigen","ahole","allumÈ","allumÈe","allupato","amador","amcik","ammucchiata","anal","anale","analritter","anderhalve man en een paardekop","andskota","anilingus","anita","anus","‚nus","ar5e","aranha","ariano","arrapato","arrse","arrusa","arruso","arsch","arschficker","arschlecker","arschloch","arse","arsehole","asbak","Asesinato","ash0le","ash0les","asholes","asno","aso","ass","Ass Monkey","assatanato","asses","Assface","assfucker","ass-fucker","assfukka","assh0le","assh0lez","asshole","assholes","assholz","assmunch","assrammer","asswhole","asswipe","auto erotic","autoerotic","ayir","azzhole","b!+ch","b!tch","b00b","b00bs","b17ch","b1tch","babeland","baby batter","bagascia","bagger schijten","bagnarsi","baiser","balalao","baldracca","balen","ball gag","ball gravy","ball kicking","ball licking","ball sack","ball sucking","ballbag","balle","balls","ballsack","bander","bangbros","bareback","barely legal","barenaked","bassterds","bastard","bastardo","bastards","bastardz","basterds","basterdz","bastinado","battere","battona","bbw","bdsm","beastial","beastiality","beaver cleaver","beaver lips","bedonderen","befborstelg","beffen","bekken","belazeren","belino","bellend","besodemieterd zijn","besodemieteren","bestial","bestiality","beurt","bi curious","bi+ch","bi7ch","Biatch","bicha","big black","big breasts","big knockers","big tits","biga","bigornette","bimbos","birdlock","biscate","bissexual","bitch","bitcher","bitchers","bitches","bitchin","bitching","bite","bitte","black cock","bloblos","blonde action","blonde on blonde action","bloody","blow j","Blow Job","blow your l","blowjob","blowjobs","blue waffle","blumpkin","bocchinara","bocchino","boceta","boemelen","boerelul","boerenpummelg","boffing","bofilo","boiata","boiolas","bokkelul","Bollera","bollock","bollocks","bollok","bondage","boner","boob","boobs","booobs","boooobs","booooobs","booooooobs","booty call","bordel","bordello","bosser","bosta","botergeil","bourrÈ","bourrÈe","branlage","branler","branlette","branleur","branleuse","bratze","braulio de borracha","breasts","brinca","broekhoesten","brouter le cresson","brown showers","brugpieperg","brunette action","bucaiolo","buceta","budi˘lo","buffelen","bugger","buiten de pot piesen","bukkake","bulldyke","bullet vibe","bum","bumbum","bumsen","bung hole","bunghole","bunny fucker","buona donna","burro","busone","busty","butt","buttcheeks","butthole","buttmuch","butt-pirate","buttplug","buttwipe","bychara","byk","c0ck","c0cks","c0cksucker","c0k","cabrao","cabron","CabrÛn","Caca","cacca","caccati in mano e prenditi a schiaffi","cacete","caciocappella","cadavere","cagar","cagare","cagata","cagna","cailler","camel toe","camgirl","camisinha","cammello","camslut","camwhore","cappella","caralho","carciofo","carit‡","carpet muncher","carpetmuncher","casci","cawk","cawks","cazzata","cazzimma","cazzo","cerveja","chatte","checca","chernozhopyi","chiappa","chiasse","chiavare","chiavata","chier","chink","chiottes","chochota","chocolate rosebuds","chraa","chuj","Chupada","Chupapollas","chupar","ChupetÛn","ciospo","cipa","circlejerk","cirer","ciucciami il cazzo","cl1t","cleveland steamer","clit","clito","clitoris","clits","clover clamps","clusterfuck","cnts","cntz","cnut","cocaÌna","cock","cockface","cockhead","cock-head","cockmunch","cockmuncher","cocks","cocksuck ","cocksucked ","CockSucker","cock-sucker","cocksucking","cocksucks ","cocksuka","cocksukka","coglione","coglioni","cok","cokmuncher","coksucka","colhoes","comer","con","cona","concha","Concha de tu madre","connard","connasse","conne","CoÒo","consolo","coon","CoprofagÌa","coprolagnia","coprophilia","cornhole","corno","cornuto","couilles","cox","cozza","cramouille","crap","cu","cul","culattina","culattone","Culo","cum","cummer","cumming","cums","cumshot","cunilingus","cunillingus","cunnilingus","cunt","cuntlick ","cuntlicker ","cuntlicking ","cunts","cuntz","cyalis","cyberfuc","cyberfuck ","cyberfucked ","cyberfucker","cyberfuckers","cyberfucking ","d1ck","d4mn","damn","dar o rabo","darkie","da's kloten van de bok","date rape","daterape","daygo","de ballen","de hoer spelen","de hond uitlaten","de koffer induiken","de pijp aan maarten geven","de pijp uitgaan","dÈconne","dÈconner","deep throat","deepthroat","dego","delg","di merda","dick","dickhead","dike","dild0","dild0s","dildo","dildos","dilld0","dilld0s","dink","dinks","dirsa","dirty pillows","dirty sanchez","ditalino","dlck","dˆdel","dog style","dog-fucker","doggie style","doggiestyle","doggin","dogging","doggy style","doggystyle","dolboy'eb","dolcett","dombo","domination","dominatricks","dominatrics","dominatrix","dommes","donkey punch","donkeyribber","doosh","double dong","double penetration","doudounes","dp action","draaikontg","drague","driehoog achter wonen","Drogas","drolg","drooggeiler","droogkloot","duche","dum raio","dupa","duro","dyke","dziwka","eat my ass","ebalnik","ebalo","ebalom sch'elkat","ecchi","een beurt geven","een nummertje maken","een wip maken","eikel","ejackulate","ejaculate","ejaculated","ejaculates ","ejaculating ","ejaculatings","ejaculation","ejakulate","Ekrem","Ekto","emmerdant","emmerder","emmerdeur","emmerdeuse","enculÈ","enculÈe","enculer","enema","enfoirÈ","enfoirÈe","engerd","erotic","erotism","escort","Esperma","esporra","ethical slut","Ètron","eunuch","f u c k","f u c k e r","f_u_c_k","f4nny","faen","fag","fag1t","faget","fagg1t","fagging","faggit","faggitt","faggot","faggs","fagit","fagot","fagots","fags","fagz","faig","faigs","fanculo","fanny","fannyflaps","fannyfucker","fanyy","fare unaä","fart","fatass","fava","fcuk","fcuker","fcuking","fecal","feces","feck","fecker","feg","felch","Felcher","felching","fellate","fellatio","feltch","female squirting","femdom","femminuccia","fica","fick","ficken","Fiesta de salchichas","figa","figging","figlio di buona donna","figlio di puttana","figone","filho da puta","fille de pute","fils de pute","fingerfuck ","fingerfucked ","fingerfucker ","fingerfuckers","fingerfucking ","fingerfucks ","fingering","finocchio","fistfuck","fistfucked ","fistfucker ","fistfuckers ","fistfucking ","fistfuckings ","fistfucks ","fisting","fitt","flamoes","flange","flic","flikken","Flikker","flipping the bird","flittchen","foda","foda-se","foder","Follador","Follar","folle","fook","fooker","foot fetish","footjob","foreskin","fottere","fottersi","Fotze","foutre","fracicone","frango assado","fratze","fregna","frocio","froscio","frotting","Fu(","fuck","fuck buttons","fucka","fucked","fucker","fuckers","fuckhead","fuckheads","fuckin","fucking","fuckings","fuckingshitmotherfucker","fuckme ","fucks","fuckwhit","fuckwit","fudge packer","fudgepacker","fuk","Fukah","Fuken","fuker","Fukin","Fukk","Fukkah","Fukken","Fukker","Fukkin","fuks","fukwhit","fukwit","fuori come un balcone","futanari","futkretzn","fux","fux0r","g ????","g00k","gadverdamme","galbak","gang bang","gangbang","gangbanged ","gangbangs ","gat","gay","gay sex","gayboy","gaygirl","gaylord","gays","gaysex","gayz","gedoogzone","geil","geilneef","genitals","gerber","gesodemieter","giant cock","Gilipichis","Gilipollas","girl on","girl on top","girls gone wild","goatcx","goatse","God","god-dam","goddamn","goddamned","God-damned","godverdomme","gokkun","gol","golden shower","goldone","goo girl","goodpoop","gook","goregasm","gouine","gozar","graftak","grande folle","gras maaien","gratenkutg","grelho","greppeldel","griet","grilletto","grogniasse","grope","group sex","g-spot","guanto","guardone","gueule","guiena","guro","h00r","h0ar","h0r","h0re","h4x0r","Hacer una paja","Haciendo el amor","hackfresse","hand job","handjob","hard core","hardcore","hardcoresex ","hell","hells","helvete","hentai","HeroÌna","heshe","heterosexual","Hija de puta","Hijaputa","Hijo de puta","Hijoputa","hoar","hoare","hoempert","hoer","hoerenbuurt","hoerenloper","hoerig","hol","homem gay","homo","homoerotic","homoerÛtico","homosexual","honkey","hooker","hoor","hoore","hore","horniest","horny","hot chick","hotsex","how to kill","how to murder","Huevon","hufter","huge fat","hui","huisdealer","humping","hupen","hure","hurensohn","Idiota","ImbÈcil","incazzarsi","incest","incoglionirsi","inferno","infierno","ingoio","injun","intercourse","ische","jack off","jackoff","jack-off ","jail bait","jailbait","jap","japs","jerk off","jerk-off","jerk-off ","jigaboo","jiggaboo","jiggerboo","Jilipollas","jisim","jism","jiss","jiz ","jizm","jizm ","jizz","johny","jouir","juggs","kackbratze","kacke","kacken","kampflesbe","kanen","kanker","Kapullo","kawk","kettingzeugg","kike","kimme","kinbaku","kinkster","kinky","klaarkomen","klerebeer","klojo","klooien","klootjesvolk","klootoog","klootzak","kloten","knackwurst","knob","knobbing","knobead","knobed","knobend","knobhead","knobjocky","knobjokey","knobs","knobz","knor","knulle","kock","kondum","kondums","kontg","kontneuken","kraut","krentekakker","kuk","kuksuger","kum","kummer","kumming","kums","kunilingus","kunt","kunts","kuntz","Kurac","kurwa","kusi","kut","kuttelikkertje","kwakkieg","kyrpa","l3i+ch","l3itch","la putain de ta mËre","labia","Lameculos","l'arte bolognese","latte","leather restraint","leather straight jacket","leccaculo","lecchino","lemon party","Lesbian","lÈsbica","lesbo","Lezzian","liefdesgrot","Lipshits","Lipshitz","lmfao","lofare","loffa","loffare","lolita","lovemaking","lul","lul-de-behanger","lulhannes","lumaca","lummel","l¸mmel","lust","lusting","m0f0","m0fo","m45terbate","ma5terb8","ma5terbate","Maciza","Macizorra","mafketel","make me come","maldito","male squirting","MALPT","mama","Mamada","mamhoon","manico","mannaggia","maquereau","Marica","MaricÛn","Mariconazo","martillo","masochist","masokist","massterbait","masstrbait","masstrbate","masterb8","masterbaiter","masterbat","masterbat3","masterbate","master-bate","masterbates","masterbation","masterbations","masturbat","masturbate","matennaaierg","matje","melon","menage a trois","mÈnage a trois","merd","merda","merdata","merde","merdeuse","merdeux","merdoso","merlan","meuf","mibun","Mierda","mignotta","milcht¸ten","milf","minchia","minchione","missionary position","mof","mof0","mofo","mo-fo","mona","monkleigh","monta","montare","mˆpse","morgenlatte","morue","mˆse","Motha Fucker","Motha Fuker","Motha Fukkah","Motha Fukker","mothafuck","mothafucka","mothafuckas","mothafuckaz","mothafucked ","mothafucker","mothafuckers","mothafuckin","mothafucking ","mothafuckings","mothafucks","Mother Fucker","Mother Fukah","Mother Fuker","Mother Fukkah","Mother Fukker","motherfuck","motherfucked","motherfucker","mother-fucker","motherfuckers","motherfuckin","motherfucking","motherfuckings","motherfuckka","motherfucks","moule","mouliewop","mound of venus","mr hands","mucke","mudack","muff","muff diver","muffdiving","mufti","muie","mulkku","muschi","mussa","mutha","Mutha Fucker","Mutha Fukah","Mutha Fuker","Mutha Fukkah","Mutha Fukker","muthafecker","muthafuckker","muther","mutherfucker","mutsg","n1gga","n1gger","n1gr","naaien","naakt","nackt","nambla","nastt","nave scuola","nawashi","nazi","nazis","nËgre","negro","neonazi","nepesaurio","nerchia","neuken","neukstier","nicht","nig nog","nigg3r","nigg4h","nigga","niggah","niggas","niggaz","nigger","nigger;","niggers ","nigur;","niiger;","niigr;","nimphomania","nippel","nipple","nipples","nique ta mËre","nob","nob jokey","nobhead","nobjocky","nobjokey","noune","nsfw images","nude","nudity","nudo","numbnuts","nutsack","nympho","nymphomania","octopussy","oetlul","omorashi","onanieren","one cup two girls","one guy one jar","op z'n hondjes","op z'n sodemieter geven","opgeilen","opizdenet","opkankeren","oprotten","opsodemieteren","opzouten","orafis","orgasim ","orgasim;","orgasims ","orgasm","orgasms ","orgasum","orgy","oriface","orifice","orifiss","Orina","orospu","osto'eblo","ostokhuitel'no","ot'ebis","otmudohat","otpizdit","otsosi","ouwe rukker","ouwehoer","ouwehoeren","p0rn","paal","paardelul","packi","packie","packy","padlo","padulo","paedophile","paki","pakie","paky","palen","palle","palloso","palucher","paneleiro","panties","panty","paska","passar um cheque","patacca","patonza","pau","pawn","pecker","pecorina","pÈdale","pÈdÈ","pedik","Pedo","pedobear","pedophile","peeenus","peeenusss","peenus","pegging","peidar","peinus","pen1s","penas","penis","pÍnis","penis-breath","penisfucker","penozeg","penus","penuus","perdet","perse","Pervertido","pesce","pÈter","petuh","PezÛn","phone sex","phonesex","Phuc","Phuck","Phuk","phuked","Phuker","phuking","phukked","Phukker","phukking","phuks","phuq","picheln","picio","picka","pidar gnoinyj","piece of shit","pierdol","piesen","pigfucker","pijpbekkieg","pijpen","pik","pillu","pimmel","pimpern","pimpis","pincare","Pinche","pinkeln","pinto","pipa","pipe","pipi","pipÏ","pippone","pirla","Pis","pisciare","piscio","pisello","piss","piss pig","pissed","pissen","pisser","pissers","pisses ","pissflaps","pissin ","pissing","pissoff ","pisspig","pistola","pistolotto","piz`dyulina","pizda","pizdato","pizdatyi","piz'det","pizdetc","pizdoi nakryt'sja","pizd'uk","playboy","pleasure chest","pleurislaaier","po khuy","podi ku'evo","poeben","poep","poepen","poilu","po'imat' na konchik","po'iti posrat","polac","polack","polak","pole smoker","poluchit pizdy","pomiciare","pompa","pompino","ponyplay","poof","Poonani","poontsee","poop","poop chute","poopchute","poot","popel","poppen","porca","porca madonna","porca miseria","porca puttana","porco due","porco zio","porn","porno","pornography","pornos","porra","portiekslet","pososi moyu konfetku","pot","potta","potverdorie","pouffiasse","pousse-crotte","pr0n","pr1c","pr1ck","pr1k","preteen","prick","pricks ","prince albert piercing","prissat","proebat","promudobl'adsksya pizdopro'ebina","pron","propezdoloch","prosrat","Prostituta","pthc","pube","pubes","publiciteitsgeil","pula","pule","pusse","pussee","pussi","pussies","pussy","pussys ","puta","puta que pariu","puta que te pariu","putain","pute","puto","puttana","puuke","puuker","qahbeh","quaglia","queaf","queca","queef","queer","queers","queerz","queue","qweers","qweerz","qweir","raaskallen","Racista","raghead","raging boner","Ramera","ramoner","rape","raping","rapist","raspeezdeyi","raspizdatyi","rautenberg","raz'yebuy","raz'yoba","recchione","recktum","rectum","reet","reet trappen"," voor zijn","reetridder","regina","remsporeng","retard","reudig","reutelen","reverse cowgirl","rimjaw","rimjob","rimming","rincoglionire","rizzarsi","rompiballe","rosette","rosy palm","rosy palm and her 5 sisters","rothoer","rotzak","ruffiano","rukhond","rukken","rusty trombone","s & m","s hit","s&m","s.o.b.","s_h_i_t","sacanagem","saco","S·dico","sadism","sadist","salaud","salope","sbattere","sbattersi","sborra","sborrata","sborrone","sbrodolata","scank","scat","schabracke","schaffer","schatje","scheiss","scheiﬂe","schijt","schijten","schlampe","schlong","schmuck","schnackeln","schoft","schuinsmarcheerder","scissoring","scopare","scopata","scorreggiare","screw","screwing","scroat","scrote","scrotum","s'ebat'sya","sega","semen","serin","service trois piËces","sex","sexo","Sexo oral","sexy","sh!+","Sh!t","sh1t","sh1ter","sh1ts","sh1tter","sh1tz","shag","shagger","shaggin","shagging","shalava","sharmuta","sharmute","shaved beaver","shaved pussy","shemale","shi+","shibari","shipal","shit","shitdick","shite","shited","shitey","shitfuck","shitfull","shithead","shiting","shitings","shits","shitted","shitter","shitters ","shitting","shittings","Shitty","shitty ","Shity","shitz","shiz","shota","shrimping","Shyt","Shyte","Shytty","Shyty","skanck","skank","skankee","skankey","skanks","Skanky","skribz","skurwysyn","slanteye","slempen","sletg","sletterig","slik mijn zaad","slinguare","slinguata","slut","sluts","Slutty","slutz","sm","sm??","smandrappata","smegma","smut","snatch","snolg","snowballing","soccia","socmel","sodomize","sodomy","son-of-a-bitch","Soplagaitas","Soplapollas","sorca","spac","spagnola","sphencter","spic","spierdalaj","splooge","spompinare","spooge","spread legs","spuiten","spunk","standje","standje-69g","sticchio","stoephoer","stootje","strap on","strapon","strappado","strip club","strontg","stronza","stronzata","stronzo","styervo","style doggy","suce","suck","sucks","sufferdg","suicide girls","suka","sukin syn","sultry women","sveltina","sverginare","svodit posrat","svoloch","swastika","swinger","t1tt1e5","t1tties","tainted love","tante","tapette","tapijtnek","tarzanello","taste my","tea bagging","teefg","teets","teez","temeier","teringlijer","terrone","testa di cazzo","testical","testicle","Tetas grandes","tette","teuf","threesome","throating","TÌa buena","tied up","tight white","tirare","tirer","tit","titfuck","tits","titt","tittchen","titten","tittie5","tittiefucker","titties","titty","tittyfuck","tittywank","titwank","toeter","tongue in a","tongzoeng","topa","topless","torneira","tosser","towelhead","trakhat'sya","tranny","transar","Travesti","tribadism","trick","trimandoblydskiy pizdoproyob","tringle","tringler","Trio","triootjeg","trique","troia","trombare","trottoir prostituÈe","trottoirteef","trou du cul","tub girl","tubgirl","turd","turlute","tushy","tw4t","twat","twathead","twatty","twink","twinkie","two girls one cup","twunt","twunter","ubl'yudok","uboy","uccello","u'ebitsche","undressing","upskirt","urethra play","urophilia","utrecht","v pizdu","v14gra","v1gra","va1jina","vacca","vaffanculo","vafl'a","vafli lovit","vag1na","vagiina","vagina","vai tomar no cu","vai-te foder","vaj1na","vajina","vangare","veado","venire","venus mound","Verga","vergallen","verkloten","verneuken","vete a la mierda","veuve","viagra","viande a pneus","vibrador","vibrator","viespeuk","vingeren","violet blue","violet wand","vittu","vleesroos","vˆgeln","vollpfosten","voor jan lul","voor jan-met-de-korte-achternaam","vorarephilia","voyeur","vullva","vulva","vyperdysh","vzdrochennyi","w00se","w0p","wang","wank","wanker","wanky","watje","welzijnsmafia","wet dream","wetback","wh00r","wh0re","white power","whoar","whore","wichsen","wichser","wijf","willies","willy","wippen","women rapping","wop","wrapping men","wrinkled starfish","wuftje","xana","xochota","xrated","xx","xxx","yaoi","yeb vas","yed","yellow showers","yiffy","zaadje","zabourah","za'ebat","zaebis","zakkenwasser","zalupa","zalupat","zasranetc","zassat","zeiken","zeiker","zinne","zio cantante","zlo'ebuchy","zoccola","zoophilia","zuigen","zuiplap");
            foreach ($words as $word)
            {
                
                if (stripos($value, $word) !== false){
                    Session::flash('error','Profanity is not allowed in this application. Come on guys! Lets be decent!');
                    return false;
                } 
            }
            return true;
        }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Profanity is not allowed in this application. Come on guys! Lets be decent!';
    }
}
