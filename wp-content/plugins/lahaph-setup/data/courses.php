<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

function lahaph_get_courses_data(): array {
	return array(
		array(
			'title'    => '랩 아카데미',
			'category' => '음악',
			'content'  => '리듬과 가사로 구성된 랩은 음악적, 언어적 요소가 복합된 음악 장르로서 심리와 정서를 잘 다듬고 안정적으로 표현하도록 이끌어 냅니다. 랩을 통해 스트레스 해소와 적절한 자기표현, 감정조절 능력, 자존감 향상 등의 긍정적인 효과를 기대할 수 있으며, 자신의 정서를 언어적으로 잘 표현할 수 있도록 도움을 주어 예술가가 되기 위한 첫 단추 역할을 합니다.',
			'meta'     => array(
				'lahaph_schedule'      => "After School : 금 오후 4시~6시\nAfter Work : 금 오후 4시~6시",
				'lahaph_display_order' => 1,
			),
		),
		array(
			'title'    => '뮤지컬 아카데미',
			'category' => '음악',
			'content'  => '연기, 노래, 안무 등 예술 활동의 종합체인 뮤지컬 활동은 자신이 맡은 배역에 집중함으로써 타인을 공감하고 상대방과 교류하는 경험을 갖습니다. 이러한 단체 활동을 통하여 사회성을 향상시키며 사회적응능력을 증진시키는 효과를 가져다줍니다.',
			'meta'     => array(
				'lahaph_schedule'      => "After School : 수 오후 4시~6시\nAfter Work : 수 오후 4시~6시",
				'lahaph_display_order' => 2,
			),
		),
		array(
			'title'    => '보컬 아카데미',
			'category' => '음악',
			'content'  => '음악적 기능에 중점을 둔 보컬 수업을 통해 음악의 요소인 음정, 박자, 선율, 세기에 대하여 이해하고, 안정된 호흡과 발성 능력, 발화기능의 향상을 이끌어내며 언어적 상호작용 능력을 증진시킵니다.',
			'meta'     => array(
				'lahaph_schedule'      => "After School : 월 오후 4시~6시\nAfter Work : 월 오후 4시~6시",
				'lahaph_display_order' => 3,
			),
		),
		array(
			'title'    => 'K-POP 아카데미',
			'category' => '음악',
			'content'  => '한국의 대표 장르이자 세계적으로 주목받는 K-Pop 댄스는 전신을 활용한 신체기능 향상과 단체 안무 연습을 통한 사회성 및 공간감각 능력 향상, 자아효능감 증진의 효과를 나타냅니다.',
			'meta'     => array(
				'lahaph_schedule'      => "After School : 수 오후 4시~6시\nAfter Work : 수 오후 4시~6시",
				'lahaph_display_order' => 4,
			),
		),
		array(
			'title'    => '탭 아카데미',
			'category' => '무용/댄스',
			'content'  => '하체 중심의 전신 운동을 통하여 신체기능을 향상시키며 재즈를 기반으로 다양한 장르의 리듬 감각을 입힙니다. 또한, 단체 생활에서 필요한 공간감각과 탭 소리를 일치시키는 과정에서 필요한 신체적 협응 및 상호작용 능력을 향상시킵니다.',
			'meta'     => array(
				'lahaph_schedule'      => "After School : 금 오후 6시~8시\nAfter Work : 금 오후 6시~8시",
				'lahaph_display_order' => 5,
			),
		),
		array(
			'title'    => '발레 아카데미',
			'category' => '무용/댄스',
			'content'  => '미적 표현 능력에 중점을 둔 발레는 신체의 자유로운 표현 활동을 통한 자존감 향상과 정서적 안정감과 미적 표현 기술 향상의 효과를 지닙니다. 또한, 신체 기능 중 유연성에 집중하여 운동 조절 능력을 향상시키고, 자세를 교정시킵니다.',
			'meta'     => array(
				'lahaph_schedule'      => "After School : 화 오후 6시~8시\nAfter Work : 화 오후 6시~8시",
				'lahaph_display_order' => 6,
			),
		),
		array(
			'title'    => '힙합댄스 아카데미',
			'category' => '무용/댄스',
			'content'  => '박진감 넘치는 비트에 맞춰 에너지 넘치는 동작을 표현하는 힙합 댄스 수업은 신체의 각종 근육을 활용하여 전신운동 및 신체 근력 향상, 그룹 댄스를 통한 사회적 상호작용 능력 향상을 이끌어냅니다.',
			'meta'     => array(
				'lahaph_schedule'      => "After School : 토 오후 1시~3시\nAfter Work : 토 오후 1시~3시",
				'lahaph_display_order' => 7,
			),
		),
		array(
			'title'    => '미술 아카데미',
			'category' => '미술',
			'content'  => '시각적 자극을 중심으로 다감각적 표현활동에 집중하여 자기표현력을 증진시키는 미술 활동을 통해 자존감이 향상되며 자기효능감을 경험시키고, 예술적 감각을 통한 두뇌 및 소근육 발달과 협응력을 증진시킵니다.',
			'meta'     => array(
				'lahaph_schedule'      => "After School : 월 오후 4시~6시\nAfter Work : 월 오후 4시~6시",
				'lahaph_display_order' => 8,
			),
		),
		array(
			'title'    => '레크레이션 아카데미',
			'category' => '생활',
			'content'  => '양손과 각종 도구를 이용하여 다양한 놀이거리를 창조하고 다함께 즐기는 레크리에이션 활동은 집중력과 창의성을 이끌어내며, 양손을 지속적으로 사용함으로써 소근육을 향상시키며, 안정된 관계형성을 만드는 능력을 기릅니다.',
			'meta'     => array(
				'lahaph_schedule'      => "After School : 목 오후 4시~6시\nAfter Work : 목 오후 4시~6시",
				'lahaph_display_order' => 9,
			),
		),
		array(
			'title'    => '챠밍 아카데미',
			'category' => '생활',
			'content'  => '사회 활동에서 갖추어야 할 용모와 매너, 메이크업, 워킹 등 미적 영역에서의 기능을 갖추도록 이끄는 수업으로서 위생, 건강, 미용 등 전반적인 생활 부분에서의 심미적 발전을 위한 이론과 실습을 훈련합니다. 전문 메이크업 아티스트, 현역 모델의 특별지도를 통해 현장감 있는 레슨을 경험할 수 있습니다.',
			'meta'     => array(
				'lahaph_schedule'      => "After School : 목 오후 4시~6시\nAfter Work : 목 오후 4시~6시",
				'lahaph_display_order' => 10,
			),
		),
		array(
			'title'    => '미디어 아카데미',
			'category' => '미디어',
			'content'  => '미디어와 시스템을 활용하여 on-off line에서의 안정된 관계형성을 이끌어내고, 빠르게 변모하는 사회에 적응하며, SNS의 적절한 활용법 및 비대면 수업을 위한 다양한 어플리케이션(Zoom, Webex, Google Meet) 활용법을 입힙니다. 궁극적으로는 새로운 콘텐츠를 창출할 수 있도록 연구하고 즐기는 활동을 주도합니다.',
			'meta'     => array(
				'lahaph_schedule'      => "After School : 화 오후 4시~6시\nAfter Work : 화 오후 4시~6시",
				'lahaph_display_order' => 11,
			),
		),
		array(
			'title'    => '데이트코칭 아카데미',
			'category' => '생활',
			'content'  => '성에 대한 올바른 지식과 태도에 대해 배움으로서 남녀 간의 품위 있고 성숙하며, 지혜로운 관계를 위해 고민하고 행동할 수 있는 자세를 함양합니다. 또한, 남녀가 함께 보내는 시간 뿐만 아니라 타인과의 상호관계, 감정교류, 관계개선을 위한 연구를 진행합니다.',
			'meta'     => array(
				'lahaph_schedule'      => "After School : 월 오후 6시~8시\nAfter Work : 월 오후 6시~8시",
				'lahaph_display_order' => 12,
			),
		),
	);
}
