<?php
/**
 * Elgg Feedback plugin
 * Feedback interface for Elgg sites
 *
 * @package Feedback
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Prashant Juvekar
 * @copyright Prashant Juvekar
 * @link http://www.linkedin.com/in/prashantjuvekar
 *
 * for Elgg 1.8 by iionly
 * iionly@gmx.de
 */

return [
	'feedback' => 'Feedbacks',
	'admin:administer_utilities:feedback' => 'Feedbacks du site',
	'item:object:feedback' => 'Feedback',
	'feedback:label' => 'Feedback',
	'feedback:title' => 'Feedback',

	'feedback:admin:title' => 'Feedbacks du site',
	'feedback:widget:description' => 'Afficher les feedbacks des membres du site.',
	'feedback:numbertodisplay' => 'Nombre de feedbacks à afficher',

	'feedback:message' => "Vous avez une remarque à faire, de nouvelles idées à proposer ou un bug à signaler ? Nous serions ravis d'avoir votre retour.",
	'feedback:message:adminonly' => "<p><strong>Attention, ceci n'est pas un outil de discussion : pour cela utilisez les commentaires !</strong></p>",

	'feedback:default:id' => 'Nom et/ou Email',
	'feedback:default:description' => 'Dites-nous ce que vous en pensez !',
	'feedback:default:description:err' => 'Aucun message de feedback.\nNous apprécions vos suggestions et critiques.\nVeuillez saisir votre message et cliquer sur Envoyer.',

	'feedback:id:blank' => 'Adresse email non renseignée !',
	'feedback:captcha:blank' => 'Captcha non renseigné !',

	'feedback:submit_msg' => 'Envoi en cours...',
	'feedback:submit_err' => "Impossible d'envoyer le feedback !",

	'feedback:submit:error' => "Impossible d'envoyer le feedback !",
	'feedback:submit:success' => "Feedback envoyé. Merci !",

	'feedback:delete:success' => 'Feedback supprimé.',

	'feedback:mood:' => '(aucun)',
	'feedback:mood:undefined' => '(non défini)',
	'feedback:mood:angry' => '<i class="far fa-frown"></i>',
	'feedback:mood:neutral' => '<i class="far fa-meh"></i>',
	'feedback:mood:happy' => '<i class="far fa-smile"></i>',
	
	'feedback:about:' => '(non défini)',
	'feedback:about:bug_report' => '<i class="fas fa-exclamation-circle"></i> Bugs',
	'feedback:about:content' => '<i class="fas fa-exclamation-triangle"></i> Contenus',
	'feedback:about:suggestions' => '<i class="fas fa-info-circle"></i> Suggestions',
	'feedback:about:compliment' => '<i class="far fa-thumbs-up"></i> Compliments',
	'feedback:about:other' => 'Autres',
	'feedback:about:feedback' => '(non classé)',
	'feedback:about:undefined' => '(non défini)',

	'feedback:list:mood' => 'Humeur',
	'feedback:list:about' => 'A propos de',
	'feedback:list:page' => 'URL du feedback',
	'feedback:list:from' => 'De',
	'feedback:list:nofeedback' => 'Aucun feedback.',
	'feedback:list:noopenfeedback' => 'Aucun feedback ouvert pour le moment.',

	'feedback:user_1' => "Identifiant 1 : ",
	'feedback:user_2' => "Identifiant 2 : ",
	'feedback:user_3' => "Identifiant 3 : ",
	'feedback:user_4' => "Identifiant 4 : ",
	'feedback:user_5' => "Identifiant 5 : ",
	'feedback:settings:public' => "Les visiteurs non connectés peuvent-ils publier des feedbacks ? ",
	'feedback:settings:usernames' => "Vous pouvez définir jusqu'à 5 membres qui recevront des notifications à chaque nouveau feedback. Saisissez leurs identifiants ci-dessous : ",

	'feedback:email:subject' => '[Feedback] %s',
	'feedback:email:body' => "%1\$s a fait un feedback sur la page %5\$s : 
	<strong>\"%2\$s\"</strong>
	
	%3\$s
	
	Voir en ligne : %4\$s
	",
	
	
	// Groups
	'feedback:group' => "Feedbacks",
	'feedback:option:grouptool' => "Laisser le choix au responsable de chaque groupe",
	'feedback:enablefeedback' => "Activer le feedback dans ce groupe",
	'feedback:page:unknown' => "URL inconnue",
	'feedback:viewfull' => "Afficher la discussion en pleine page",
	'feedback:commentsreply' => "%s commentaire(s) &nbsp; &raquo;&nbsp;Répondre",
	
	// Settings
	'feedback:settings:memberview' => "Les membres du site peuvent-ils consulter les feedbacks ?",
	'feedback:settings:comment' => "Est-il possible de commenter et de répondre aux feedbacks ?",
	'feedback:settings:feedbackgroup' => "Associer les feedbacks à un ou des groupes ?",
	'feedback:settings:enablemood' => "Activer les humeurs",
	'feedback:settings:enableabout' => "Activer les catégories de feedback",
	'feedback:settings:about_values' => "Catégories de feedback (si activées)",
	
	// Admin view
	'feedback:upgrade' => "Mettre à niveau les feedbacks",
	
	// Feedback status
	'feedback:status' => "Statut des feedbacks",
	'feedback:status:open' => "Ouverts",
	'feedback:status:closed' => "Résolus",
	'feedback:status:total' => "",
	'feedback:list:status:open' => "Ouvert",
	'feedback:list:status:closed' => "Résolu",
	'feedback:close' => '<i class="far fa-square"></i>',
	'feedback:closeconfirm' => "Marquer comme résolu ? Un feedback résolu est considéré comme traité et alimente la base de connaissances. Confirmer ?",
	'feedback:close:success' => "Feedback marqué comme résolu / déjà traité.",
	'feedback:close:error' => "Impossible de marquer ce feedback comme résolu",
	'feedback:reopen' => '<i class="far fa-check-square"></i>',
	'feedback:reopenconfirm' => "Ce feedback est considéré comme déjà résolu. Souhaitez-vous le rouvrir ?",
	'feedback:reopen:success' => "Feedback marqué comme en cours / non résolu.",
	'feedback:reopen:error' => "Impossible de rouvrir ce feedback",
	'feedback:delete' => '<i class="fas fa-trash"></i>',
	
	// Feedbacks menu
	'feedback:menu:total' => "%s feedbacks",
	'feedback:menu:total:singular' => "%s feedback",
	'feedback:menu:open' => "%s à traiter",
	'feedback:menu:open:singular' => "%s à traiter",
	'feedback:menu:closed' => "%s résolus",
	'feedback:menu:closed:singular' => "%s résolu",
	'feedback:menu:content' => "%s signalements",
	'feedback:menu:content:singular' => "%s signalement",
	'feedback:menu:bug_report' => "%s dysfonctionnements",
	'feedback:menu:bug_report:singular' => "%s dysfonctionnement",
	'feedback:menu:suggestions' => "%s suggestions",
	'feedback:menu:suggestions:singular' => "%s suggestion",
	'feedback:menu:question' => "%s questions",
	'feedback:menu:question:singular' => "%s question",
	'feedback:menu:compliment' => "%s compliments",
	'feedback:menu:compliment:singular' => "%s compliment",
	'feedback:menu:other' => "%s autres / non classés",
	'feedback:menu:other:singular' => "%s autre / non classé",
	
	
	// About - feedback types
	//'feedback:about' => "de type",
	'feedback:about' => ":",
	'feedback:about:question' => '<i class="far fa-question-circle"></i> Question',
	'feedback:access:admin' => "Administrateur seulement",
	'feedback:access:sitemembers' => "Membres du site",
	'feedback:access:group' => "Membres du groupe",

	'feedback:email:reply:subject' => "[Feedback] %s",
	'feedback:email:reply:summary' => "%s a répondu sur \"%s\"",
	'feedback:email:reply:body' => "%s a répondu sur \"%s\" :
	
	%s
	
	Voir en ligne : %s
	",
	
	'feedback:linktofeedbacks' => "&raquo;&nbsp;Afficher les précédents feedbacks",
	
	// Search
	'feedback:status:nofilter' => "(pas de filtre)",
	'feedback:about:nofilter' => "(pas de filtre)",
	'feedback:about:undefined' => "(aucun)",
	'feedback:mood:nofilter' => "(pas de filtre)",
	'feedback:mood:undefined' => "(aucun)",
	'feedback:search:mood:angry' => 'Négatif',
	'feedback:search:mood:neutral' => 'Neutre',
	'feedback:search:mood:happy' => 'Positif',
	
	
];

