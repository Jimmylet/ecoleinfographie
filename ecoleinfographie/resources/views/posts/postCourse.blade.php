@extends('layout')

@section('class', 'course-post')

@section('header')
	@include('partials.header-min')
@endsection

@section('content')
	@include('partials.breadcrumb')

	<section class="course" itemscope itemtype="http://schema.org/Course">
		<div class="course__container-top">
			<div class="course-card">
				<meta itemprop="provider" content="Haute École d’infographie de la Province de Liège">
				<meta itemprop="url" content="{{ Url()->current() }}">

				<img class="course-card__image" src="{{ $course->getImageCourse('') }}" width="360" height="417" alt="">
				<div class="course-card__content">
					<h2 role="heading" aria-level="2" class="course-card__title" itemprop="name">{{ $course->title }}</h2>

					<span class="course-card__hour">{{ $course->duration }} heures</span>
					<span class="course-card__credits">{{ $course->ects }} credits <abbr title="Système européen de transfert et d’accumulation de crédits">ECTS</abbr></span>

					<ul class="course-card__org">
					@if(!empty($course->ratio))
					<?php $ratio = json_decode($course->ratio, true); ?>
						@foreach($ratio as $row)
							<li class="course-card__org__item">
								<span class="course-card__org__text">{{ $row['type'] }} - {{ $row['hour'] }}<abbr title="heures">h</abbr></span>
							</li>
						@endforeach
					@endif
					</ul>

					<span class="course-card__eval-title">Évaluation&nbsp;:</span>
					<ul class="course-card__eval">
						@if(!empty($course->evaluation))
						<?php $evaluation = json_decode($course->evaluation, true) ;?>
						@foreach($evaluation as $row)
							<li class="course-card__eval__item">{{ $row['type'] }}</li>
						@endforeach
						@endif
					</ul>


					<span class="course-card__bloc">Cours du bloc {{ $course->bloc }}
						<small>
							(<?php switch ($course->bloc) {
                    case 1:
                        echo "première année";
                        break;
                    case 2:
                        echo "deuxième année";
                        break;
                    case 3:
                        echo "troisième année";
                }; ?>)
						</small>
					</span>

					<span class="course-card__bloc">
						Dispensé
              <?php switch ($course->quadrimester) {
                  case 'Premier':
                      echo "en 1<sup>er</sup> quadrimestre (de septembre à décembre)";
                      break;
                  case 'Deuxième':
                      echo "en 2<sup>e</sup> quadrimestre (de janvier à juin)";
                      break;
                  case 'Toute l’année':
                      echo "toute l’année";
              }; ?>
					</span>
				</div>

			</div>
			<section class="course-description">
				<h3 role="heading" aria-level="3" class="course-description__title">Description du cours</h3>
				<div itemprop="description">
            {!! str_replace('h3', 'h4', $course->description) !!}
				</div>
			</section>
		</div>
		<section class="course-obj">
			<div class="course-obj__wrapper">
				<h3 role="heading" aria-level="3" class="course-obj__title">Objectifs du cours</h3>
				<ul class="course-obj__list">
					@if(!empty($course->objectives))
            <?php $evaluation = json_decode($course->objectives, true) ;?>
							@foreach($evaluation as $row)
								<li class="course-obj__item">{{ $row['text'] }}</li>
							@endforeach
					@endif
				</ul>
			</div>
		</section>
		@if(!empty($course->teachers))
		<section class="course-teachers">
			<h3 role="heading" aria-level="3" class="course-teachers__title">Les professeurs</h3>
			<ul class="course-teachers__list">

				@foreach($course->teachers as $teacher)
				<li class="course-teachers__item">
					<a href="{{ url('professeurs/' . $teacher->slug ) }}" class="card_student">
						<figure class="card_student__figure">
							<div class="card_student__picture-wrapper">
								<img class="card_student__picture" src="{{ $teacher->getImageProfile('_cards.jpg') }}" width="313" height="179" alt="#" >
							</div>
							<figcaption class="card_student__figcaption">
								<strong class="card_student__name">
									{{ $teacher->firstname }} <span>{{ $teacher->lastname }}</span>
								</strong>
								<span class="card_student__profession">
									{{ $teacher->role }}
								</span>
							</figcaption>
						</figure>
						<div class="card_student__fake-link">
							<span class="card_student__fake-link__text">Voir sa fiche</span>
						</div>
					</a>
				</li>
				@endforeach
			</ul>
		</section>
		@endif
	</section>

@endsection

