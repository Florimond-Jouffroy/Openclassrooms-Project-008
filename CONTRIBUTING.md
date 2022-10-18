# Bienvenue dans le guide de contribution à la documentation GitHub <!-- omit in toc -->

Merci d'avoir investi votre temps pour contribuer à notre projet! Toute contribution que vous apporterez sera reflétée sur [docs.github.com](https://docs.github.com/en) :sparkles:.


Dans ce guide, vous obtiendrez un aperçu du flux de travail de contribution depuis l'ouverture d'un problème, la création d'un PR, la révision et la fusion du PR.

## Guide du nouveau contributeur

Pour avoir un aperçu du projet, lisez le [README](README.md). Voici quelques ressources pour vous aider à démarrer avec les contributions open source :

- [Trouver des moyens de contribuer à l'open source sur GitHub](https://docs.github.com/en/get-started/exploring-projects-on-github/finding-ways-to-contribute-to-open-source-on-github)
- [Configurer Git](https://docs.github.com/en/get-started/quickstart/set-up-git)
- [Flux GitHub](https://docs.github.com/en/get-started/quickstart/github-flow)
- [Collaborer avec des pull requests](https://docs.github.com/en/github/collaborating-with-pull-requests)


## Commencer

### Issues

#### Créer une nouvelle issue

Si vous repérez un problème avec la documentation, [recherchez si un problème existe déjà](https://docs.github.com/en/github/searching-for-information-on-github/searching-on-github/searching-issues-and-pull-requests#search-by-the-title-body-or-comments). Si un problème connexe n'existe pas, vous pouvez ouvrir un nouveau problème à l'aide d'un [formulaire de problème](https://github.com/github/docs/issues/new/choose).

#### Résoudre une issue

Parcourez nos [problèmes existants](https://github.com/github/docs/issues) pour en trouver un qui vous intéresse. Vous pouvez affiner la recherche en utilisant des "libellés" comme filtres. Voir [Labels](/contributing/how-to-use-labels.md) pour plus d'informations. En règle générale, nous n'attribuons des problèmes à personne. Si vous trouvez un problème sur lequel travailler, vous pouvez ouvrir un PR avec un correctif.

### Faire des changements

#### Apporter des modifications à l'interface utilisateur

Cliquez sur **Apporter une contribution** en bas de n'importe quelle page de documentation pour apporter de petites modifications telles qu'une faute de frappe, une correction de phrase ou un lien brisé. Cela vous amène au fichier `.md` où vous pouvez apporter vos modifications et [créer une demande d'extraction](#pull-request) pour une révision.


#### Apporter des modifications dans un espace de code

Pour plus d'informations sur l'utilisation d'un espace de code pour travailler sur la documentation GitHub, consultez "[Travailler dans un espace de code](https://github.com/github/docs/blob/main/contributing/codespace.md)".

#### Apporter des modifications localement

1. [Installer Git LFS](https://docs.github.com/en/github/managing-large-files/versioning-large-files/installing-git-large-file-storage).

2. Fourchez le référentiel.
- En utilisant GitHub Desktop :
  - [Getting started with GitHub Desktop](https://docs.github.com/en/desktop/installing-and-configuring-github-desktop/getting-started-with-github-desktop) vous guidera dans la configuration de Desktop .
  - Une fois Desktop configuré, vous pouvez l'utiliser pour [forker le dépôt](https://docs.github.com/en/desktop/contributing-and-collaborating-using-github-desktop/cloning-and-forking- référentiels-de-github-desktop) !

- A l'aide de la ligne de commande :
  - [Fork the repo](https://docs.github.com/en/github/getting-started-with-github/fork-a-repo#fork-an-example-repository) afin que vous puissiez apporter vos modifications sans affecter le projet d'origine jusqu'à ce que vous soyez prêt à les fusionner.

3. Installez ou mettez à jour vers **Node.js v16**.

4. Créez une branche de travail et commencez avec vos modifications !

### Commit vos modification

CValidez les modifications une fois que vous en êtes satisfait. Consultez le [guide de contribution d'Atom](https://github.com/atom/atom/blob/master/CONTRIBUTING.md#git-commit-messages) pour savoir comment utiliser les emoji pour les messages de validation.

Une fois que vos modifications sont prêtes, n'oubliez pas de [self-review](/contributing/self-review.md) pour accélérer le processus de révision :zap:.

### Pull Request

Lorsque vous avez terminé les modifications, créez une demande d'extraction, également appelée PR.
- Remplissez le modèle "Prêt pour examen" afin que nous puissions examiner votre PR. Ce modèle aide les réviseurs à comprendre vos modifications ainsi que l'objectif de votre demande d'extraction.
- N'oubliez pas de [link PR to issue](https://docs.github.com/en/issues/tracking-your-work-with-issues/linking-a-pull-request-to-an-issue ) si vous en résolvez un.
- Cochez la case pour [autoriser les modifications du responsable] (https://docs.github.com/en/github/collaborating-with-issues-and-pull-requests/allowing-changes-to-a-pull-request-branch -created-from-a-fork) afin que la branche puisse être mise à jour pour une fusion.
Une fois que vous avez soumis votre PR, un membre de l'équipe Docs examinera votre proposition. Nous pouvons poser des questions ou demander des informations supplémentaires.
- Nous pouvons demander que des modifications soient apportées avant qu'un PR puisse être fusionné, soit en utilisant [modifications suggérées](https://docs.github.com/en/github/collaborating-with-issues-and-pull-requests/incorporating -feedback-in-your-pull-request) ou des commentaires de demande de tirage. Vous pouvez appliquer les modifications suggérées directement via l'interface utilisateur. Vous pouvez apporter d'autres modifications à votre fork, puis les valider dans votre branche.
- Lorsque vous mettez à jour votre PR et appliquez des modifications, marquez chaque conversation comme [résolue](https://docs.github.com/en/github/collaborating-with-issues-and-pull-requests/commenting-on-a- pull-request#résolution-conversations).
- Si vous rencontrez des problèmes de fusion, consultez ce [tutoriel git](https://github.com/skills/resolve-merge-conflicts) pour vous aider à résoudre les conflits de fusion et d'autres problèmes.

### Votre PR est merged!

Félicitations :tada: :tada: L'équipe GitHub vous remercie :sparkles:.

Une fois votre PR fusionné, vos contributions seront visibles publiquement sur les [documents GitHub](https://docs.github.com/en).
