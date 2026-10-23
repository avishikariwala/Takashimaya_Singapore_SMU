<?php
// Takashimaya Singapore Loyalty redesign prototype
$prestigeTiers = [
  ['name'=>'Bronze','spend'=>'Above $10K','img'=>'https://taka-prd-cdn.ascentismedia.com/SharedImages/Public/files/Takashimaya%20Prestige%20Card/Card%20Bronze%20FA-02_Edit.png','class'=>'bronze'],
  ['name'=>'Silver','spend'=>'Above $20K','img'=>'https://taka-prd-cdn.ascentismedia.com/SharedImages/Public/files/Takashimaya%20Prestige%20Card/Card%20Silver%20FA-02_Edit.png','class'=>'silver'],
  ['name'=>'Gold','spend'=>'Above $100K','img'=>'https://taka-prd-cdn.ascentismedia.com/SharedImages/Public/files/Takashimaya%20Prestige%20Card/Card%20Gold%20FA-02_Edit.png','class'=>'gold'],
  ['name'=>'Platinum','spend'=>'Above $300K','img'=>'https://taka-prd-cdn.ascentismedia.com/SharedImages/Public/files/Takashimaya%20Prestige%20Card/Card%20Platinum%20FA-02_Edit.png','class'=>'platinum'],
  ['name'=>'Diamond','spend'=>'Above $500K','img'=>'https://taka-prd-cdn.ascentismedia.com/SharedImages/Public/files/Takashimaya%20Prestige%20Card/Card%20Diamond%20FA-02_Edit.png','class'=>'diamond'],
];
$prestigeBenefits = [
 ['Dedicated VIP Hotline, Ambassador & Counter',0],['Exclusive Experiences',0],['New Launch & Sale Preview',0],['VIP Digital Catalogue',0],['Staycation Perks',0],['Spend & Earn Rewards',0],['Japan Takashimaya Premium Shopper\'s Card',0],
 ['Prestige Lounge Access',1],['Complimentary Home Delivery',1],['Complimentary Wet Weather Care',1],['Loan of Power Bank',1],['Shopping Bag Deposit Service',1],['Japan Airline Premier Lounge Access',1],['Imperial Hotel Privilege',1],['Welcome Reward',1],
 ['Premium Experiences',2],['Birthday Vouchers',2],['Exclusive Parking Privilege',3],['Premium Birthday Gift',3],['Private Event Invites',3],['Complimentary Staycation',4],['Top Spender Hamper',4]
];
$cards = [
 ['name'=>'DBS Takashimaya American Express Card','short'=>'AMEX','age'=>'21 years & above','store'=>'Every $10 charged = 2 Bonus Points','specialty'=>'Every $30 charged = 2 Bonus Points','extra'=>'10 BP with min. $400 charged Mon–Thu','img'=>'https://taka-prd-cdn.ascentismedia.com/SharedImages/Public/files/Takashimaya%20Cards%20Cardface/DBS%20TAKASHIMAYA%20AMERICAN%20EXPRESS%20CARD%20..png','learn'=>'https://www.dbs.com.sg/personal/cards/credit-cards/dbs-takashimaya-card'],
 ['name'=>'DBS Takashimaya Visa Credit Card','short'=>'VISA CREDIT','age'=>'21 years & above','store'=>'Every $12 charged = 2 Bonus Points','specialty'=>'Every $30 charged = 1 Bonus Point','extra'=>'10 BP with min. $400 charged Mon–Thu','img'=>'https://taka-prd-cdn.ascentismedia.com/SharedImages/Public/files/Takashimaya%20Cards%20Cardface/DBS%20TAKASHIMAYA%20VISA%20CARD.png','learn'=>'https://www.dbs.com.sg/personal/cards/credit-cards/dbs-takashimaya-card'],
 ['name'=>'DBS Takashimaya Visa Debit Card','short'=>'VISA DEBIT','age'=>'16 years & above','store'=>'Every $10 charged = 1 Bonus Point','specialty'=>'Not applicable','extra'=>'10% off during eligible Card Promotion periods','img'=>'https://taka-prd-cdn.ascentismedia.com/SharedImages/Public/files/takashimaya-debit-card.png','learn'=>'https://www.dbs.com.sg/personal/cards/debit-cards/dbs-takashimaya-visa-debit'],
 ['name'=>'Takashimaya Cash Smart Card','short'=>'CASH SMART','age'=>'18 years & above','store'=>'Every $10 spent = 1 Bonus Point','specialty'=>'Not applicable','extra'=>'10% off during eligible Card Promotion periods','img'=>'https://taka-prd-cdn.ascentismedia.com/SharedImages/Public/files/fa-cash-smart-card.png','learn'=>'https://taka-prd-cdn.ascentismedia.com/SharedImages/Public/files/1Oct2024_Smartcardappform_For%20Website.pdf'],
];
$faqs = [
 ['General','How can I qualify for the Prestige Program?','Meet the annual spending requirement for your tier from January to December at participating outlets using an eligible DBS Takashimaya card.'],
 ['General','What is the qualifying period for the Prestige Program?','Qualification is based on eligible annual spend accumulated during the current calendar year.'],
 ['Privileges','What privileges do I enjoy as a Prestige member?','Benefits grow by tier and can include dedicated VIP service, exclusive experiences, lounge access, birthday privileges, parking privileges and selected staycation benefits.'],
 ['TPC Status','How can I check my current TPC tier?','Open the Takashimaya App, tap Member, then select Prestige Program.'],
 ['Dedicated Team','How can I get more information about the Prestige Program?','Visit the Customer Service Centre at Level 3 of Takashimaya Department Store. Prestige members also receive access to a dedicated VIP Concierge.']
];
$page_title = 'Takashimaya Cards & Prestige Programme | Takashimaya Singapore';
$page_desc = 'Choose how you want to be rewarded — earn Takashimaya Bonus Points with our everyday cards, or explore elevated privileges through the Prestige Programme.';
$current_page = 'loyalty';

include 'header.php';
?>
<style>
:root{--loyalty-red:#bd112c;--loyalty-red2:#d1223c;--loyalty-ink:#241d1a;--loyalty-muted:#6f645e;--loyalty-line:#eadfd8;--loyalty-cream:#fbf7f3;--loyalty-rose:#f9ecee;--loyalty-white:#fff}
.loyalty-page{max-width:1440px;margin:auto;background:#fff;min-height:80vh}
.loyalty-hero{padding:54px clamp(24px,5vw,76px) 30px;border-bottom:1px solid var(--loyalty-line);background:#fff}
.eyebrow{color:var(--loyalty-red);font-size:14px;letter-spacing:.18em;font-weight:800;text-transform:uppercase}
.loyalty-hero h1{font:500 clamp(40px,5vw,68px)/.98 var(--font-heading, Georgia,'Times New Roman',serif);margin:10px 0 18px;letter-spacing:-.035em;color:#1d1815}
.loyalty-hero p{max-width:760px;color:var(--loyalty-muted);font-size:18px;line-height:1.55;margin:0}
.switcher-wrap{padding:24px clamp(24px,5vw,76px) 0;position:sticky;top:68px;background:rgba(255,255,255,.96);backdrop-filter:blur(14px);z-index:20}
.switcher{display:grid;grid-template-columns:1fr 1fr;padding:5px;border:1px solid var(--loyalty-line);border-radius:16px;background:var(--loyalty-cream);max-width:900px}
.switcher button{border:0;background:transparent;padding:16px 18px;border-radius:11px;font-weight:800;color:#514741;cursor:pointer}
.switcher button.active{background:var(--loyalty-red);color:#fff;box-shadow:0 8px 24px rgba(189,17,44,.16)}
.section{padding:50px clamp(24px,5vw,76px)}
.panel{display:none}
.panel.active{display:block}
.intro{display:grid;grid-template-columns:minmax(0,1.15fr) minmax(320px,.85fr);gap:48px;align-items:end;margin-bottom:36px}
.intro h2{font:500 clamp(34px,4vw,54px)/1 var(--font-heading, Georgia,'Times New Roman',serif);margin:7px 0 12px;letter-spacing:-.025em;color:#1d1815}
.intro p{color:var(--loyalty-muted);font-size:17px;line-height:1.55;margin:0}
.quickfacts{display:flex;gap:12px;justify-content:flex-end;flex-wrap:wrap}
.fact{padding:12px 16px;border:1px solid var(--loyalty-line);border-radius:999px;background:#fff;font-size:14px}
.tier-nav{display:grid;grid-template-columns:repeat(5,1fr);gap:10px;margin:24px 0 28px}
.tier-btn{border:1px solid var(--loyalty-line);background:#fff;border-radius:14px;padding:14px 10px;cursor:pointer;text-align:left}
.tier-btn b{display:block;font-family:var(--font-heading, Georgia,'Times New Roman',serif);font-size:20px}
.tier-btn small{color:var(--loyalty-muted)}
.tier-btn.active{border-color:var(--loyalty-red);box-shadow:inset 0 0 0 1px var(--loyalty-red);background:#fffafa}
.tier-stage{display:grid;grid-template-columns:minmax(300px,.82fr) minmax(0,1.18fr);gap:28px;background:linear-gradient(135deg,#faf6f2,#fff);border:1px solid var(--loyalty-line);border-radius:24px;padding:clamp(22px,3vw,42px);overflow:hidden}
.card-visual{min-height:330px;display:flex;align-items:center;justify-content:center;position:relative}
.card-visual img{width:min(100%,430px);max-height:270px;object-fit:contain;filter:drop-shadow(0 22px 22px rgba(48,32,25,.18))}
.tier-copy{align-self:center}
.tier-copy .tier-label{color:var(--loyalty-red);font-weight:800;letter-spacing:.12em;text-transform:uppercase}
.tier-copy h3{font:500 42px/1 var(--font-heading, Georgia,'Times New Roman',serif);margin:8px 0;color:#1d1815}
.spend{font-size:18px;font-weight:800;margin-bottom:20px}
.benefit-preview{display:grid;grid-template-columns:1fr 1fr;gap:10px 22px}
.benefit-preview div{padding:10px 0;border-bottom:1px solid var(--loyalty-line);font-size:14px}
.benefit-preview div:before{content:'✓';color:var(--loyalty-red);font-weight:900;margin-right:8px}
.comparison{margin-top:34px}
.comparison-head{display:flex;align-items:end;justify-content:space-between;gap:20px;margin-bottom:14px}
.comparison h3,.cards-section h3,.faq h3{font:500 32px/1.1 var(--font-heading, Georgia,'Times New Roman',serif);margin:0;color:#1d1815}
.compare-tools{display:flex;align-items:center;justify-content:flex-end;gap:12px;flex-wrap:wrap}
.scroll-hint{display:none;color:var(--loyalty-muted);font-size:13px}
.scroll-hint.show{display:inline}
.clear-highlight{display:none;border:0;background:var(--loyalty-rose);color:var(--loyalty-red);font-weight:800;border-radius:999px;padding:9px 13px;cursor:pointer}
.clear-highlight.show{display:inline-flex}
.table-scroll{overflow-x:auto;overflow-y:visible;border:1px solid var(--loyalty-line);border-radius:18px;scrollbar-width:thin;overscroll-behavior-x:contain}
.benefit-table{width:100%;border-collapse:separate;border-spacing:0;min-width:860px;table-layout:fixed}
.benefit-table th,.benefit-table td{padding:13px 14px;border-bottom:1px solid var(--loyalty-line);text-align:center;font-size:13px;transition:background .16s ease,color .16s ease,opacity .16s ease}
.benefit-table thead th{background:var(--loyalty-cream);font-weight:800;position:relative}
.benefit-table th:first-child,.benefit-table td:first-child{text-align:left;position:sticky;left:0;z-index:3;background:#fff;width:43%;min-width:280px;box-shadow:1px 0 0 var(--loyalty-line)}
.benefit-table thead th:first-child{z-index:5;background:var(--loyalty-cream)}
.tier-head-btn,.privilege-btn,.cell-toggle{border:0;background:transparent;color:inherit;font:inherit;cursor:pointer}
.tier-head-btn{width:100%;padding:4px 2px;font-weight:800;border-radius:8px}
.tier-head-btn:focus-visible,.privilege-btn:focus-visible,.cell-toggle:focus-visible,.clear-highlight:focus-visible{outline:2px solid var(--loyalty-red);outline-offset:2px}
.privilege-btn{width:100%;padding:0;text-align:left;font-weight:600}
.cell-toggle{width:42px;height:34px;border-radius:10px;display:inline-grid;place-items:center}
.check{color:var(--loyalty-red);font-size:18px;font-weight:900;line-height:1}
.na{color:#b8ada7}
.benefit-table tbody tr:hover td,.benefit-table tbody tr.row-active td{background:#fff8f8}
.benefit-table tbody tr:hover td:first-child,.benefit-table tbody tr.row-active td:first-child{background:#fff4f5}
.benefit-table.col-selected th:not(:first-child),.benefit-table.col-selected td:not(:first-child){opacity:.42}
.benefit-table.col-selected th.col-active,.benefit-table.col-selected td.col-active{opacity:1;background:#fff3f5}
.benefit-table.col-selected thead th.col-active{background:#f9e6e9;color:var(--loyalty-red)}
.benefit-table tbody tr.row-active td.col-active{background:#f8e0e4}
.benefit-table tbody tr:hover td.col-active{background:#f8e0e4}
.benefit-table tbody tr:last-child td{border-bottom:0}
.compare-status{min-height:20px;margin:10px 2px 0;color:var(--loyalty-muted);font-size:12px}
.compare-status strong{color:var(--loyalty-red)}
.cards-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-top:26px}
.product-card{border:1px solid var(--loyalty-line);border-radius:20px;padding:20px;display:flex;flex-direction:column;min-height:440px;background:#fff}
.product-card .imgbox{height:155px;display:flex;align-items:center;justify-content:center;margin-bottom:16px}
.product-card img{max-width:100%;max-height:145px;object-fit:contain}
.product-card h4{font:600 21px/1.15 var(--font-heading, Georgia,'Times New Roman',serif);margin:0 0 14px;color:#1d1815}
.metric{padding:11px 0;border-top:1px solid var(--loyalty-line);font-size:13px;line-height:1.4}
.metric span{display:block;color:var(--loyalty-muted);font-size:11px;text-transform:uppercase;letter-spacing:.08em;font-weight:800;margin-bottom:3px}
.product-card .actions{margin-top:auto;display:flex;gap:10px;padding-top:16px}
.product-card .actions a{flex:1;text-align:center;text-decoration:none;padding:11px;border-radius:999px;font-size:13px;font-weight:800}
.product-card .primary{background:var(--loyalty-red);color:#fff}
.product-card .secondary{border:1px solid var(--loyalty-line);color:var(--loyalty-red)}
.reward-strip{margin:32px 0;background:var(--loyalty-red);color:#fff;border-radius:20px;padding:24px 28px;display:flex;align-items:center;justify-content:space-between;gap:24px}
.reward-strip strong{font:500 27px var(--font-heading, Georgia,'Times New Roman',serif)}
.reward-strip span{opacity:.9}
.faq{margin-top:48px;border-top:1px solid var(--loyalty-line);padding-top:40px}
.faq-layout{display:grid;grid-template-columns:280px 1fr;gap:40px;margin-top:24px}
.faq-tabs{display:flex;flex-direction:column;gap:6px}
.faq-tabs button{border:0;background:transparent;text-align:left;padding:11px 12px;border-radius:10px;font-weight:800;cursor:pointer}
.faq-tabs button.active{background:var(--loyalty-rose);color:var(--loyalty-red)}
.faq-item{border-bottom:1px solid var(--loyalty-line)}
.faq-q{width:100%;border:0;background:transparent;padding:18px 0;text-align:left;display:flex;justify-content:space-between;font-weight:800;font-size:16px;cursor:pointer}
.faq-a{display:none;color:var(--loyalty-muted);line-height:1.6;padding:0 36px 18px 0}
.faq-item.open .faq-a{display:block}
.note{color:var(--loyalty-muted);font-size:12px;line-height:1.55;margin-top:28px}
.mobile-compare{display:none}
@media(max-width:980px){
  .intro,.tier-stage{grid-template-columns:1fr}
  .quickfacts{justify-content:flex-start}
  .tier-nav{grid-template-columns:repeat(5,minmax(130px,1fr));overflow:auto;padding-bottom:6px}
  .cards-grid{grid-template-columns:1fr 1fr}
  .faq-layout{grid-template-columns:1fr}
  .faq-tabs{flex-direction:row;overflow:auto}
  .faq-tabs button{white-space:nowrap}
  .card-visual{min-height:240px}
}
@media(max-width:650px){
  .loyalty-hero{padding-top:38px}
  .switcher-wrap{padding-left:14px;padding-right:14px}
  .switcher button{padding:12px 8px;font-size:13px}
  .section{padding:34px 18px}
  .intro{gap:18px;margin-bottom:22px}
  .tier-stage{padding:20px}
  .tier-copy h3{font-size:34px}
  .benefit-preview{grid-template-columns:1fr}
  .cards-grid{grid-template-columns:1fr}
  .reward-strip{align-items:flex-start;flex-direction:column}
  .comparison-head{align-items:flex-start;flex-direction:column}
  .compare-tools{justify-content:flex-start}
  .benefit-table{min-width:760px}
  .benefit-table th,.benefit-table td{padding:12px 10px}
  .benefit-table th:first-child,.benefit-table td:first-child{width:210px;min-width:210px}
  .mobile-compare{display:none}
  .faq-layout{gap:18px}
}
</style>

<main class="loyalty-page">
<section class="loyalty-hero"><div class="eyebrow">Loyalty &amp; Privileges</div><h1>Takashimaya Cards &amp; Prestige</h1><p>Choose how you want to be rewarded — earn Takashimaya Bonus Points with our everyday cards, or explore elevated privileges through the Prestige Programme.</p></section>
<div class="switcher-wrap"><div class="switcher" role="tablist"><button class="active" data-panel="cards">Takashimaya Cards</button><button data-panel="prestige">Prestige Card Programme</button></div></div>
<section class="section panel active" id="cards">
<div class="intro"><div><div class="eyebrow">Everyday rewards</div><h2>Make every visit more rewarding.</h2><p>Compare four Takashimaya card options at a glance — from eligibility and earning rates to specialty-store rewards and Bonus Point redemption.</p></div><div class="quickfacts"><div class="fact"><b>100 BP = $30</b> Gift Vouchers</div><div class="fact">Redeem at <b>Customer Service, L3</b></div></div></div>
<div class="cards-grid">
<?php foreach($cards as $c): ?><article class="product-card"><div class="imgbox"><img src="<?=htmlspecialchars($c['img'])?>" alt="<?=htmlspecialchars($c['name'])?>"></div><h4><?=$c['name']?></h4><div class="metric"><span>Eligibility</span><?=$c['age']?></div><div class="metric"><span>At Takashimaya Department Store</span><?=$c['store']?></div><div class="metric"><span>Specialty stores</span><?=$c['specialty']?></div><div class="metric"><span>Additional benefit</span><?=$c['extra']?></div><div class="actions"><a class="primary" href="<?=$c['learn']?>" target="_blank" rel="noopener">Learn more</a></div></article><?php endforeach; ?>
</div>
<div class="reward-strip"><div><strong>Turn Bonus Points into rewards.</strong><br><span>Every 100 Takashimaya Bonus Points accumulated can be redeemed for $30 Takashimaya Gift Vouchers.</span></div><span>Customer Service Centre · Level 3</span></div>
<div class="faq"><div class="eyebrow">Questions, answered</div><h3>Takashimaya Cards FAQ</h3><div class="faq-layout"><div class="faq-tabs"><button class="active">Getting started</button><button>Bonus Points</button><button>Gift Vouchers</button></div><div>
<div class="faq-item open"><button class="faq-q">How do I apply for Takashimaya Cards?<span>−</span></button><div class="faq-a">DBS Takashimaya Cards can be applied for online through DBS. For the Takashimaya Cash Smart Card, visit the Customer Service Centre at Level 3 with the required identification and application materials.</div></div>
<div class="faq-item"><button class="faq-q">How do I redeem my Bonus Points?<span>+</span></button><div class="faq-a">Bonus Points can be redeemed for Digital Bonus Point Vouchers via the Takashimaya SG app or for Takashimaya Gift Vouchers at the Customer Service Centre, Level 3.</div></div>
<div class="faq-item"><button class="faq-q">Do Takashimaya Bonus Points expire?<span>+</span></button><div class="faq-a">Bonus Points expire according to the expiry date applicable to the card and should be redeemed before expiry.</div></div>
</div></div></div>
<p class="note">Card benefits, exclusions and promotion terms may change. Please refer to Takashimaya Singapore and DBS for the latest applicable terms and participating outlets.</p>
</section>
<section class="section panel" id="prestige">
<div class="intro"><div><div class="eyebrow">By invitation through annual spend</div><h2>Prestige, recognised at every level.</h2><p>Five tiers unlock progressively elevated service, experiences and lifestyle privileges — from dedicated VIP assistance to lounge, parking, birthday and staycation benefits.</p></div><div class="quickfacts"><div class="fact">Qualifying period <b>Jan–Dec</b></div><div class="fact">5 Prestige tiers</div></div></div>
<div class="tier-nav"><?php foreach($prestigeTiers as $i=>$t): ?><button class="tier-btn <?=$i===0?'active':''?>" data-tier="<?=$i?>"><b><?=$t['name']?></b><small><?=$t['spend']?> annual spend</small></button><?php endforeach; ?></div>
<div class="tier-stage"><div class="card-visual"><img id="tierImage" src="<?=$prestigeTiers[0]['img']?>" alt="Bronze Prestige Card"></div><div class="tier-copy"><div class="tier-label">Prestige tier</div><h3 id="tierName">Bronze Member</h3><div class="spend" id="tierSpend">Annual spend above $10K</div><div class="benefit-preview" id="tierBenefits"></div></div></div>
<div class="comparison" id="prestigeComparison"><div class="comparison-head"><div><div class="eyebrow">Compare privileges</div><h3>See what each tier unlocks.</h3></div><div class="compare-tools"><span class="scroll-hint" id="scrollHint">Swipe to compare →</span><button type="button" class="clear-highlight" id="clearHighlight">Clear highlight</button></div></div><div class="table-scroll" id="tableScroll"><table class="benefit-table" id="benefitTable"><thead><tr><th>Privilege</th><?php foreach($prestigeTiers as $i=>$t): ?><th data-col="<?=$i?>"><button type="button" class="tier-head-btn" data-col="<?=$i?>" aria-label="Highlight <?=$t['name']?> tier"><?=$t['name']?></button></th><?php endforeach;?></tr></thead><tbody><?php foreach($prestigeBenefits as $r=>$b): ?><tr data-row="<?=$r?>"><td><button type="button" class="privilege-btn" data-row="<?=$r?>"><?=htmlspecialchars($b[0])?></button></td><?php for($i=0;$i<5;$i++): ?><td data-col="<?=$i?>"><?php if($i >= $b[1]): ?><button type="button" class="cell-toggle" data-col="<?=$i?>" data-row="<?=$r?>" aria-label="<?=$prestigeTiers[$i]['name']?> includes <?=htmlspecialchars($b[0])?>"><span class="check">●</span></button><?php else: ?><span class="na" aria-label="Not included">—</span><?php endif;?></td><?php endfor;?></tr><?php endforeach;?></tbody></table></div><div class="compare-status" id="compareStatus" aria-live="polite">Tip: select a tier, privilege, or red dot to focus the comparison.</div></div>
<div class="mobile-compare"><div class="eyebrow">Privileges</div><h3>What your tier unlocks</h3><?php foreach($prestigeTiers as $i=>$t): ?><details><summary><?=$t['name']?> · <?=$t['spend']?></summary><p><?php $arr=[]; foreach($prestigeBenefits as $b){if($i >= $b[1])$arr[]=$b[0];} echo implode(' · ',$arr); ?></p></details><?php endforeach;?></div>
<div class="faq"><div class="eyebrow">Prestige programme</div><h3>Frequently asked questions</h3><div class="faq-layout"><div class="faq-tabs"><?php foreach(array_values(array_unique(array_column($faqs,0))) as $j=>$cat): ?><button class="<?=$j===0?'active':''?>"><?=$cat?></button><?php endforeach;?></div><div><?php foreach($faqs as $i=>$f): ?><div class="faq-item <?=$i===0?'open':''?>"><button class="faq-q"><?=$f[1]?><span><?=$i===0?'−':'+'?></span></button><div class="faq-a"><?=$f[2]?></div></div><?php endforeach;?></div></div></div>
<p class="note">Prestige qualification and privileges are subject to programme terms, eligible spend and participating outlets. For assistance, visit Customer Service Centre at Level 3.</p>
</section>
</main>
<script>
const panelButtons=[...document.querySelectorAll('.switcher button')];panelButtons.forEach(b=>b.addEventListener('click',()=>{panelButtons.forEach(x=>x.classList.toggle('active',x===b));document.querySelectorAll('.panel').forEach(p=>p.classList.toggle('active',p.id===b.dataset.panel));window.scrollTo({top:document.querySelector('.switcher-wrap').offsetTop-10,behavior:'smooth'})}));
const tiers=<?=json_encode($prestigeTiers)?>;const benefits=<?=json_encode($prestigeBenefits)?>;
function selectTier(i){document.querySelectorAll('.tier-btn').forEach((b,n)=>b.classList.toggle('active',n===i));document.getElementById('tierImage').src=tiers[i].img;document.getElementById('tierImage').alt=tiers[i].name+' Prestige Card';document.getElementById('tierName').textContent=tiers[i].name+' Member';document.getElementById('tierSpend').textContent='Annual spend '+tiers[i].spend.toLowerCase();document.getElementById('tierBenefits').innerHTML=benefits.filter(b=>i>=b[1]).slice(0,8).map(b=>'<div>'+b[0]+'</div>').join('')}
document.querySelectorAll('.tier-btn').forEach((b,i)=>b.addEventListener('click',()=>selectTier(i)));selectTier(0);
document.querySelectorAll('.faq-q').forEach(q=>q.addEventListener('click',()=>{const item=q.closest('.faq-item');item.classList.toggle('open');q.querySelector('span').textContent=item.classList.contains('open')?'−':'+'}));
const benefitTable=document.getElementById('benefitTable'),tableScroll=document.getElementById('tableScroll'),scrollHint=document.getElementById('scrollHint'),clearHighlight=document.getElementById('clearHighlight'),compareStatus=document.getElementById('compareStatus');let selectedCol=null,selectedRow=null;
function renderCompare(){benefitTable.classList.toggle('col-selected',selectedCol!==null);benefitTable.querySelectorAll('[data-col]').forEach(el=>el.classList.toggle('col-active',selectedCol!==null&&Number(el.dataset.col)===selectedCol));benefitTable.querySelectorAll('tbody tr').forEach(tr=>tr.classList.toggle('row-active',selectedRow!==null&&Number(tr.dataset.row)===selectedRow));clearHighlight.classList.toggle('show',selectedCol!==null||selectedRow!==null);let parts=[];if(selectedCol!==null)parts.push('<strong>'+tiers[selectedCol].name+'</strong> tier');if(selectedRow!==null)parts.push('<strong>'+benefits[selectedRow][0]+'</strong>');compareStatus.innerHTML=parts.length?'Highlighting '+parts.join(' · ')+'. Select again to clear.':'Tip: select a tier, privilege, or red dot to focus the comparison.';}
function toggleCol(i){selectedCol=selectedCol===i?null:i;renderCompare()}function toggleRow(i){selectedRow=selectedRow===i?null:i;renderCompare()}
benefitTable.querySelectorAll('.tier-head-btn').forEach(b=>b.addEventListener('click',()=>toggleCol(Number(b.dataset.col))));benefitTable.querySelectorAll('.privilege-btn').forEach(b=>b.addEventListener('click',()=>toggleRow(Number(b.dataset.row))));benefitTable.querySelectorAll('.cell-toggle').forEach(b=>b.addEventListener('click',()=>{const c=Number(b.dataset.col),r=Number(b.dataset.row);selectedCol=selectedCol===c?null:c;selectedRow=selectedRow===r?null:r;renderCompare()}));clearHighlight.addEventListener('click',()=>{selectedCol=null;selectedRow=null;renderCompare()});
function updateScrollHint(){scrollHint.classList.toggle('show',tableScroll.scrollWidth>tableScroll.clientWidth+2)}window.addEventListener('resize',updateScrollHint,{passive:true});updateScrollHint();renderCompare();
</script>

<?php include 'footer.php'; ?>

