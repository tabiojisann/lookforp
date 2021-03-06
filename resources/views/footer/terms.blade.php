@extends('app')

@section('title', '利用規約')

@section('content')
  @include('nav')


  <div class="cantainer" style="max-width: 100%;">
    <div class="row">

      <div class="container my-5">
        <h2 class="border-bottom">LookForp 利用規約</h2>
        <small>
          この利用規約（以下,「本規約」といいます。）は、lookdorp（以下,「当社」）がこのウェブサイト上で提供するサービス（以下，「本サービス」といいます。）の利用条件を定めるものです。登録ユーザーの皆さま（以下，「ユーザー」といいます。）には，本規約に従って，本サービスをご利用いただきます。
        </small>
      </div>

      <div class="container border mb-5 p-4">

        <h4 class="border-bottom">第1条 本規約への同意</h4>
        <p>ユーザーは、本サービスを利用することにより、本規約に同意したことになります。本規約に同意しないユーザーは、本サービスを利用しないでください。</p>

        <h4 class="border-bottom">第2条 本規約の変更</h4>
        <p>当社は，必要と判断した場合には，ユーザーに通知することなくいつでも本規約を変更することができるものとします。なお，本規約の変更後，本サービスの利用を開始した場合には，当該ユーザーは変更後の規約に同意したものとみなします。</p>

        <h4 class="border-bottom">第3条 サービスの変更、終了</h4>
        <p>当社は，ユーザーに通知することなく，本サービスの内容を変更しまたは本サービスの提供を中止することができるものとし，これによってユーザーに生じた損害について一切の責任を負いません。</p>

        <h4 class="border-bottom">第4条 アカウントの管理</h4>
        <ol>
          <li>ユーザーは，自己の責任において，本サービスのユーザーIDおよびパスワードを適切に管理するものとします。</li>
          <li class="my-3">ユーザーは，いかなる場合にも，ユーザーIDおよびパスワードを第三者に譲渡または貸与し，もしくは第三者と共用することはできません。当社は，ユーザーIDとパスワードの組み合わせが登録情報と一致してログインされた場合には，そのユーザーIDを登録しているユーザー自身による利用とみなします。</li>
          <li>ユーザーID及びパスワードが第三者によって使用されたことによって生じた損害は，当社に故意又は重大な過失がある場合を除き，当社は一切の責任を負わないものとします。</li>
        </ol>

        <h4 class="border-bottom">第5条 コンテンツの取り扱い</h4>
        <ol>
          <li>当社は、お客様のデータについてバックアップを行う義務を負いません。必要なバックアップはお客様ご自身で行ってください。</li>
          <li class="my-3">ユーザーが本サービスに提供したコンテンツ（文章、写真、ポートフォリオ等を含みますが、これらに限られません。以下同じ）に対する権利はお客様に帰属します。</li>
          <li>ユーザーは本サービス内では、著作者人格権を行使しないものとします</li>
        </ol>

        <h4 class="border-bottom">第6条 個人情報の取扱い</h4>
        <p>
          本サービスの利用によって取得する個人情報については，当社が別途定める「
          <a href="{{ route('footer.privacy') }}">プライバシーポリシー</a>
          」に従い適切に取り扱うものとします。
        </p>

        <h4 class="border-bottom">第7条　禁止事項</h4>
        <p>ユーザーは，本サービスの利用にあたり, 以下に定める行為（それらを誘発する行為や準備行為も含みます）を禁止します。</p>
        <ol>
          <li>法令または公序良俗に違反する行為</li>
          <li>犯罪行為に関連する行為</li>
          <li>当社，本サービスの他のユーザー，または第三者のサーバーまたはネットワークの機能を破壊したり，妨害したりする行為</li>
          <li>当社のサービスの運営を妨害するおそれのある行為</li>
          <li>他のユーザーに関する個人情報等を収集または蓄積する行為</li>
          <li>不正アクセスをし，またはこれを試みる行為</li>
          <li>他のユーザーに成りすます行為</li>
          <li>当社のサービスに関連して，反社会的勢力に対して直接または間接に利益を供与する行為</li>
          <li>当社，本サービスの他のユーザーまたは第三者の知的財産権，肖像権，プライバシー，名誉その他の権利または利益を侵害する行為</li>
          <li>自己のアカウントを第三者に譲渡または貸与したり、自己のアカウントのパスワードを第三者に開示したりする行為</li>
          <li>知り合いではない他のユーザーに対し、本サービス上で無差別につながりを要求する行為</li>
          <li>他のユーザーのアカウントを使用して本サービスを利用する行為</li>
          <li>本サービスを利用して、反社会的勢力に直接・間接に利益を提供する行為</li>
          <li class="my-4">以下を目的とし，または目的とすると当社が判断する行為
            <ol>
              <li>営業，宣伝，広告，勧誘，その他営利を目的とする行為（当社の認めたものを除きます。）</li>
              <li>面識のない異性との出会いや交際を目的とする行為</li>
              <li>他のユーザーに対する嫌がらせや誹謗中傷を目的とする行為</li>
              <li>当社，本サービスの他のユーザー，または第三者に不利益，損害または不快感を与えることを目的とする行為</li>
              <li>その他本サービスが予定している利用目的と異なる目的で本サービスを利用する行為</li>
            </ol>
          </li>
          <li>その他，当社が不適切と判断する行為</li>
        </ol>

        <h4 class="border-bottom">第8条 違反等に対する措置</h4>
        <p>以下の場合、当社は、事前に通知することなく、ユーザーのデータ、コンテンツ、アカウントを削除したり、ユーザーへのサービス提供を停止したりすることができるものとします。また、ユーザーが複数のアカウントを登録されている場合には、すべてのアカウントに対して同様の措置がとられることがあります。</p>
        <ol>
          <li>本規約のいずれかの条項に違反した場合、もしくはそのおそれがあると当社が判断した場合</li>
          <li>登録事項に虚偽の事実があることが判明した場合</li>
          <li>当社からの連絡に対し，一定期間返答がない場合</li>
          <li>アカウントが反社会的勢力またはその構成員や関係者によって登録または使用された場合、もしくはそのおそれがあると当社が判断した場合</li>
          <li>ユーザーが１年以上アカウントを使用していない場合</li>
          <li>その他、ユーザーとの信頼関係が失われた場合など、当社とユーザーとの契約関係の継続が困難であると当社が判断した場合</li>
        </ol>

        <h4 class="border-bottom">第9条 免責事項</h4>
        <ol>
          <li>当社は，本サービスに事実上または法律上の瑕疵（安全性，信頼性，正確性，完全性，有効性，特定の目的への適合性，セキュリティなどに関する欠陥，エラーやバグ，権利侵害などを含みます。）がないことを明示的にも黙示的にも保証しておりません。</li>
          <li>当社は，本サービスに起因してユーザーに生じたあらゆる損害について一切の責任を負いません。ただし，本サービスに関する当社とユーザーとの間の契約（本規約を含みます。）が消費者契約法に定める消費者契約となる場合，この免責規定は適用されません。</li>
          <li>前項ただし書に定める場合であっても，当社は，当社の過失（重過失を除きます。）による債務不履行または不法行為によりユーザーに生じた損害のうち特別な事情から生じた損害（当社またはユーザーが損害発生につき予見し，または予見し得た場合を含みます。）について一切の責任を負いません。また，当社の過失（重過失を除きます。）による債務不履行または不法行為によりユーザーに生じた損害の賠償は，ユーザーから当該損害が発生した月に受領した利用料の額を上限とします。</li>
          <li>当社は，本サービスに関して，ユーザーと他のユーザーまたは第三者との間において生じた取引，連絡または紛争等について一切責任を負いません。</li>
        </ol>

        <h4 class="border-bottom">第10条 広告の掲載について</h4>
        <p>ユーザーは、本サービス上にあらゆる広告が含まれる場合があること、当社またはその提携先があらゆる広告を掲載する場合があることを理解しこれを承諾したものとみなします。本サービス上の広告の形態や範囲は、当社によって随時変更されます。</p>


        <h4 class="border-bottom">第11条 連絡</h4>
        <p>本サービスに関するユーザーから当社への連絡は、当社が運営するウェブサイト内の適宜の場所に設置する
          <a href="{{ route('contact.index') }}">お問い合わせフォーム</a>
           の送信または当社が指定する方法により行っていただきます。
           本サービスに関する当社からユーザーへの連絡は、当社が運営するウェブサイト内の適宜の場所への掲示その他、当社が適当と判断する方法により行ないます。
           ユーザーは、当社が、当社または当社のビジネスパートナーに関する広告または宣伝等を、ユーザーが登録したメールアドレス宛に送信する可能性があることに同意のうえ、本サービスを利用するものとします。
        </p>

        <h4 class="border-bottom">第12条 反社会的勢力に該当しない</h4>
        <p>当社とお客様とは、相手方に対し、自己およびその代表者、役員、その他、実質的に経営を有する者が、現在、暴力団、暴力団員、暴力団準構成員、暴力団関係企業、総会屋、社会運動標ぼうゴロ、政治活動標ぼうゴロ、特殊知能暴力集団、これらの者と密接な関係を有する者またはこれらに準じる者のいずれにも該当しないことを表明し、
           かつ、将来にわたっても該当しないことを確約するものとします。当社およびお客様は、相手方が上記の表明または確約に違反した場合、何ら催告することなしに直ちに本サービスの利用および本サービスに関連する契約を解除することができるものとします。
        </p>


        <h4 class="border-bottom">第13条 権利義務の譲渡の禁止</h4>
        <p>ユーザーは，当社の書面による事前の承諾なく，利用契約上の地位または本規約に基づく権利もしくは義務を第三者に譲渡し，または担保に供することはできません。</p>

        <h4 class="border-bottom">第14条 準拠法・裁判管轄</h4>
        <ol>
          <li>本規約の解釈にあたっては，日本法を準拠法とします。</li>
          <li>本サービスに関して紛争が生じた場合には，当社の本店所在地を管轄する裁判所を専属的合意管轄とします。</li>
        </ol>


      
    

    
       

        <small>最終改定日 :</small>
        <small>2020年 8月 22日</small>
      </div>

    </div>
  </div>



  @include('footer.sub')
@endsection