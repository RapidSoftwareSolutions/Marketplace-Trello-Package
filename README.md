[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Trello/functions?utm_source=RapidAPIGitHub_TrelloFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Trello Package
Connect to the Trello Project Management API to get data and update tasks on this project management app. Test an API call and export the code into your app.
* Domain: [trello.com](https://trello.com/)
* Credentials: apiKeys

## How to get credentials: 
1. Sign up in [trello.com](https://trello.com/signup).
2. Navigate to [Developer API Keys page](https://trello.com/app-key).
3. Use Key as credentials apiKeys.
4. With description on [Authorizing a Client](https://developers.trello.com/authorize) page you can generate accessToken. 

 ## Webhook credentials
 Please use SDK to test this feature.
 1. Go to [RapidAPI](http://rapidapi.com)
 2. Log in or create an account
 3. Go to [My apps](https://dashboard.rapidapi.com/projects)
 4. Add new project with projectName to get your project Key
 
 | Field      | Type       | Description
 |------------|------------|----------
 | projectName     | credentials| Your RapidAPI project name
 | projectKey | credentials     | Your RapidAPI project key

## Trello.getToken
Find a token by identifier.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.
| fields     | String     | Comma-separated list of fields for fetching. One of: all, dateCreated, dateExpires, idMember, identifier, permissions.

## Trello.deleteToken
Remove a token.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.

## Trello.getTokenMember
Get a given token member.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.
| fields     | String     | Comma-separated list of fields for fetching. One of: all, avatarHash, avatarSource, bio, bioData, confirmed, email, fullName, gravatarHash, idBoards, idBoardsPinned, idOrganizations, idPremOrgsAdmin, initials, loginTypes, memberType, oneTimeMessagesDismissed, prefs, premiumFeatures, products, status, status, trophies, uploadedAvatarHash, url, username.

## Trello.getTokenWebhooks
Get a given token webhooks.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.

## Trello.getTokenSingleWebhook
Get a given token single webhook by identifier.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.
| idWebhook  | String     | The identifier of the webhook.

## Trello.createTokenWebhook
Create a given token webhook.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.
| callbackURL| String     | A valid URL that is reachable with a HEAD request.
| idModel    | String     | Identifier of the model to be monitored.
| description| String     | Description of webhook.

## Trello.updateTokenWebhook
Update a given token webhook.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.
| callbackURL| String     | A valid URL that is reachable with a HEAD request.
| idModel    | String     | Identifier of the model to be monitored.
| description| String     | Description of webhook.

## Trello.removeTokenWebhook
Remove a given token single webhook by identifier.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| tokenId    | String     | The token's identifier.
| idWebhook  | String     | The identifier of the webhook.

## Trello.getWebhook
Get single webhook by identifier.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idWebhook  | String     | The identifier of the webhook.

## Trello.createWebhook
Create a webhook.
You can use our service as callbackURL: 
```
https://webhooks.rapidapi.com/api/message/Intercom/webhookEvent/{projectName}/{projectKey} * see credentials description above
```

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| callbackURL| String     | A valid URL that is reachable with a HEAD request.
| idModel    | String     | Identifier of the model to be monitored.
| description| String     | Description of webhook.

## Trello.updateWebhook
Update a webhook.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idWebhook  | String     | The identifier of the webhook.
| callbackURL| String     | A valid URL that is reachable with a HEAD request.
| idModel    | String     | Identifier of the model to be monitored.
| description| String     | Description of webhook.

## Trello.deleteWebhook
Delete a webhook.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idWebhook  | String     | The identifier of the webhook.

## Trello.getType
Get type of team or user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| teamOrUserId| String     | Team or user identifier.

## Trello.getBoard
Get board by identifier.

| Field                    | Type       | Description
|--------------------------|------------|----------
| apiKeys                  | credentials| Your API keys credentials.
| accessToken              | String     | Access token.
| boardId                  | String     | The board identifier.
| actions                  | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| actionsEntities          | Boolean    | Actions entities. One of: true, false.
| actionsDisplay           | Boolean    | Display actions. One of: true, false.
| actionsFormat            | String     | One of actions format. One of: count, list, minimal.
| actionsSince             | String     | One of actions since. One of: date, null, lastView.
| actionsLimit             | String     | Actions limit. One of: number from 0 to 1000.
| actionFields             | String     | Comma-separated list of action fields. One of: all, data, date, idMemberCreator, type.
| actionMember             | Boolean    | Action member. One of: true, false.
| actionMemberFields       | String     | Comma-separated list of action member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| actionMemberCreator      | Boolean    | Action member creator. One of: true, false.
| actionMemberCreatorFields| String     | Comma-separated list of action member creator fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| cards                    | String     | Type of cards. One of: all, closed, none, open, visible.
| cardFields               | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| cardAttachments          | String     | Type of card attachments. One of: false, cover.
| cardAttachmentFields     | String     | Comma-separated list of card attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| cardChecklists           | String     | Card checklists. One of: all, none.
| cardPluginData           | Boolean    | Card pluginData. One of: true, false.
| cardStickers             | Boolean    | Card stickers. One of: true, false.
| boardStars               | String     | Type of board stars. One of: mine, none.
| labels                   | String     | Type of labels. One of: all, none.
| labelFields              | String     | Comma-separated list of label fields. One of: color, idBoard, name, uses.
| labelsLimit              | String     | Labels limit. One of: number from 0 to 1000.
| lists                    | String     | Type of lists. One of: all, closed, none, open.
| listFields               | String     | Comma-separated list of list fields. One of: all, closed, idBoard, name, pos, subscribed.
| memberships              | String     | Comma-separated list of memberships. One of: none, active, admin, deactivated, me, normal.
| membershipsMember        | Boolean    | Memberships member. One of: true, false.
| membershipsMemberFields  | String     | Comma-separated list of memberships member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| members                  | String     | Type of members. One of: admins, all, none, normal, owners.
| memberFields             | String     | Comma-separated list of member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| membersInvited           | String     | Type of members invited. One of: admins, all, none, normal, owners.
| membersInvitedFields     | String     | Comma-separated list of members invited fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| pluginData               | Boolean    | Plugin data. One of: true, false.
| checklists               | String     | Type of checklists. One of: all, none.
| checklistFields          | String     | Type of checklist fields. One of: idBoard, idCard, name, pos.
| organization             | Boolean    | Organization. One of: true, false.
| organizationFields       | String     | Comma-separated list of organization fields. One of: billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.
| organizationMemberships  | String     | Type of organization memberships. One of: none, active, admin, deactivated, me, normal.
| organizationPluginData   | String     | Organization plugin data. One of: true, false.
| myPrefs                  | Boolean    | My prefs. One of: true, false.
| tags                     | Boolean    | Tags. One of: true, false.
| fields                   | String     | Comma-separated list of fields. One of: closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.

## Trello.getBoardActions
Get single board actions.

| Field        | Type       | Description
|--------------|------------|----------
| apiKeys      | credentials| Your API keys credentials.
| accessToken  | String     | Access token.
| boardId      | String     | The board identifier.
| entities     | Boolean    | Actions entities. One of: true, false.
| display      | Boolean    | Display actions. One of: true, false.
| filter       | String     | Comma-separated list of actions type. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| format       | String     | One of actions format. One of: count, list, minimal.
| since        | String     | One of actions since. One of: date, null, lastView.
| before       | String     | One of actions before, date or null.
| page         | String     | Actions page. Page limit must be less than 1000.
| idModels     | String     | Actions identifier models. Return actions related to these model identifiers.
| limit        | String     | Actions limit. One of: number from 0 to 1000.
| fields       | String     | Comma-separated list of action fields. One of: all, data, date, idMemberCreator, type.
| member       | Boolean    | Action member. One of: true, false.
| memberFields | String     | Comma-separated list of action member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| memberCreator| Boolean    | Action member creator. One of: true, false.

## Trello.getBoardStars
Get single board stars.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| filter     | String     | Type of board stars. One of: mine, none.

## Trello.getBoardCards
Get single board cards.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKeys         | credentials| Your API keys credentials.
| accessToken     | String     | Access token.
| boardId         | String     | The board identifier.
| actions         | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| filter          | String     | Type of cards. One of: all, closed, none, open, visible.
| fields          | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| attachments     | String     | Type of card attachments. One of: false, cover.
| attachmentFields| String     | Comma-separated list of card attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| checklists      | String     | Card checklists. One of: all, none.
| stickers        | Boolean    | Card stickers. One of: true, false.
| members         | String     | Card members. One of: true, false.
| memberFields    | String     | Comma-separated list of member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| checkItemStates | Boolean    | Check item states. One of: true, false.
| limit           | String     | Limit, a number from 1 to 1000.
| since           | String     | Since, a date, or null.
| before          | String     | Before, a date, or null.

## Trello.getBoardSingleCard
Get single cards of single board.

| Field                    | Type       | Description
|--------------------------|------------|----------
| apiKeys                  | credentials| Your API keys credentials.
| accessToken              | String     | Access token.
| boardId                  | String     | The board identifier.
| idCard                   | String     | The card identifier.
| attachments              | String     | Type of card attachments. One of: false, cover.
| attachmentFields         | String     | Comma-separated list of card attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| actions                  | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| actionsEntities          | Boolean    | Actions entities. One of: true, false.
| actionsDisplay           | Boolean    | Display actions. One of: true, false.
| actionsLimit             | String     | Actions limit. One of: number from 0 to 1000.
| actionFields             | String     | Comma-separated list of action fields. One of: all, data, date, idMemberCreator, type.
| actionMemberCreatorFields| String     | Comma-separated list of action member creator fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| members                  | Boolean    | Card members. One of: true, false.
| memberFields             | String     | Comma-separated list of member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| checkItemStates          | Boolean    | Check item states. One of: true, false.
| checkItemStateFields     | String     | Comma-separated list of check item states fields. One of: all, idCheckItem, state.
| labels                   | Boolean    | Labels. One of: true, false.
| checklists               | String     | Type of checklists. One of: all, none.
| checklistFields          | String     | Type of checklist fields. One of: idBoard, idCard, name, pos.
| fields                   | String     | Comma-separated list of fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.

## Trello.getBoardChecklists
Get single board checklists.

| Field          | Type       | Description
|----------------|------------|----------
| apiKeys        | credentials| Your API keys credentials.
| accessToken    | String     | Access token.
| boardId        | String     | The board identifier.
| cards          | String     | List of cards type. One of: all, closed, none, open.
| cardFields     | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| checkItems     | String     | Check items. One of: all, none.
| checkItemFields| String     | Comma-separated list of check item fields. One of: name, nameData, pos, state, type.
| filter         | String     | Filter, one of: all, none.
| fields         | String     | Comma-separated list of fields. One of: all, idBoard, idCard, name, pos.

## Trello.getBoardDeltas
Get single board deltas.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| boardId     | String     | The board identifier.
| tags        | String     | A valid tag for subscribing.
| ixLastUpdate| String     | IX last update a number, from -1 to Infinity.

## Trello.getBoardLabels
Get single board labels.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| fields     | String     | Comma-separated list of fields. One of: all, color, idBoard, name, uses.
| limit      | String     | Limit, a number from 0 to 1000.

## Trello.getBoardSingleLabel
Get single labels of single board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| idLabel    | String     | The identifier of the label.
| fields     | String     | Comma-separated list of fields. One of: all, color, idBoard, name, uses.

## Trello.getBoardLists
Get single board lists.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| cards      | String     | Type of cards. One of: all, closed, none, open, visible.
| cardFields | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| filter     | String     | Filter by type of lists. One of: all, closed, none, open.
| fields     | String     | Comma-separated list of fields. One of: all, closed, idBoard, name, pos, subscribed.

## Trello.getBoardMembers
Get single board members.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| filter     | String     | Filter by type of lists. One of: admins, all, none, normal, owners.
| fields     | String     | Comma-separated list of fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| activity   | Boolean    | Activity. One of: true, false.

## Trello.getSingleBoardMemberCards
Get single members cards of single board.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKeys         | credentials| Your API keys credentials.
| accessToken     | String     | Access token.
| boardId         | String     | The board identifier.
| idMember        | String     | An identifier, username, or organization name of member.
| actions         | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| attachments     | String     | Type of card attachments. One of: false, cover.
| attachmentFields| String     | Comma-separated list of card attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| members         | Boolean    | Card members. One of: true, false.
| memberFields    | String     | Comma-separated list of member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| checkItemStates | Boolean    | Check item states. One of: true, false.
| checklists      | String     | Type of checklists. One of: all, none.
| board           | Boolean    | Board, one of: true, false.
| boardFields     | String     | Comma-separated list of board fields. One of: closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.
| list            | Boolean    | List, one of: true, false.
| listFields      | String     | Comma-separated list of list fields. One of: all, closed, idBoard, name, pos, subscribed.
| filter          | String     | Type of filter. One of: all, closed, none, open, visible.
| fields          | String     | Comma-separated list of fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.

## Trello.getMembersInvitedToBoard
Get members invited to single board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| fields     | String     | Comma-separated list of fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getBoardMemberships
Get single board memberships.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| boardId     | String     | The board identifier.
| filter      | String     | Comma-separated list of filter. One of: none, active, admin, deactivated, me, normal.
| member      | Boolean    | Memberships member. One of: true, false.
| memberFields| String     | Comma-separated list of member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getBoardSingleMembership
Get single memberships of single board.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| boardId     | String     | The board identifier.
| idMembership| String     | A membership document identifier.
| member      | Boolean    | Memberships member. One of: true, false.
| memberFields| String     | Comma-separated list of member fields. One of: avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getBoardPreferences
Get single board preferences.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.

## Trello.getBoardOrganization
Get single board organization.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| fields     | String     | Comma-separated list of organization fields. One of: all, billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.

## Trello.updateBoard
Update single board.

| Field                   | Type       | Description
|-------------------------|------------|----------
| apiKeys                 | credentials| Your API keys credentials.
| accessToken             | String     | Access token.
| boardId                 | String     | The board identifier.
| name                    | String     | Board name, a string with a length from 1 to 16384.
| desc                    | String     | Board description, a string with a length from 0 to 16384.
| closed                  | Boolean    | Is closed. One of: true, false.
| subscribed              | Boolean    | Is subscribed. One of: true, false.
| idOrganization          | String     | Identifier of organization. A string with a length from 0 to 16384.
| prefsPermissionLevel    | String     | Board preference permission level. One of: org, private, public.
| prefsSelfJoin           | Boolean    | Board preference self join. One of: true, false.
| prefsCardCovers         | Boolean    | Board preference card covers. One of: true, false.
| prefsInvitations        | String     | Board preference invitations. One of: admins, members.
| prefsVoting             | String     | Board preference voting. One of: disabled, members, observers, org, public.
| prefsComments           | String     | Board preference comments. One of: disabled, members, observers, org, public.
| prefsBackground         | String     | Board preferences background. One of: A standard background name, or the identifier of a custom background.
| prefsCardAging          | String     | Board preferences card aging. One of: pirate, regular.
| prefsCalendarFeedEnabled| Boolean    | Board preferences calendar feed enabled. One of: true, false.
| labelNamesGreen         | String     | Green label name. One of: A string with a length from 0 to 16384.
| labelNamesYellow        | String     | Yellow label name. One of: A string with a length from 0 to 16384.
| labelNamesOrange        | String     | Orange label name. One of: A string with a length from 0 to 16384.
| labelNamesRed           | String     | Red label name. One of: A string with a length from 0 to 16384.
| labelNamesPurple        | String     | Purple label name. One of: A string with a length from 0 to 16384.
| labelNamesBlue          | String     | Blue label name. One of: A string with a length from 0 to 16384.

## Trello.updateBoardCloseState
Update single board close state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Is closed. One of: true, false.

## Trello.updateBoardDescription
Update single board description.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Description value. a string with a length from 0 to 16384.

## Trello.updateBoardOrganization
Update single board organization.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | New organization identifier. a string with a length from 0 to 16384.

## Trello.updateBoardSingleLabel
Update single label of single board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| labelColor | String     | Label color name. One of: blue, green, orange, purple, red, yellow.
| value      | String     | Label value, a string with a length from 0 to 16384.

## Trello.addMemberToBoard
Add single member to board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| email      | String     | An email address of new member.
| fullName   | String     | Full name of new member. Cannot begin or end with a space.
| type       | String     | Type of new member. One of: admin, normal, observer.

## Trello.setMemberRoleOnBoard
Update board single member role.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| idMember   | String     | An identifier, username, or organization name.
| type       | String     | Type of new member. One of: admin, normal, observer.

## Trello.updateBoardMembership
Update board single membership.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| boardId     | String     | The board identifier.
| idMembership| String     | An identifier of membership.
| type        | String     | Type of new member. One of: admin, normal, observer.
| memberFields| String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.setBoardName
Update board name.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board new name, a string with a length from 1 to 16384.

## Trello.updateBoardSubscriptionState
Update board subscription state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board subscription state. One of: true, false.

## Trello.updateEmailPosition
Update board email position.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board email position. One of: bottom, top.

## Trello.updateEmailList
Update board email list.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board email list identifier.

## Trello.setShowListGuideState
Update board show list guide state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board show list guide state. One of: true, false.

## Trello.updateShowSidebarState
Update board show sidebar state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board show sidebar state. One of: true, false.

## Trello.updateShowSidebarActivityState
Update board show sidebar activity state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board show sidebar activity state. One of: true, false.

## Trello.updateShowSidebarBoardActionsState
Update board show sidebar board actions state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board show sidebar board actions state. One of: true, false.

## Trello.updateShowSidebarMembersState
Update board show sidebar members state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board show sidebar members state. One of: true, false.

## Trello.updateBoardBackground
Update board background.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board background. A standard background name, or the identifier of a custom background.

## Trello.updateCalendarFeedEnableState
Update board calendar feed enable state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board calendar feed enable state. One of: true, false.

## Trello.updateBoardCardAgingPrefs
Update board card aging preferences.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board card aging preferences. One of: pirate, regular.

## Trello.updateBoardCardCoversState
Update board card covers state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board card covers state. One of: true, false.

## Trello.updateBoardCommentsPrefs
Update board comments preferences.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board comments preferences. One of: disabled, members, observers, org, public.

## Trello.updateBoardInvitationsPrefs
Update board invitations preferences.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board invitations preferences. One of: admins, members.

## Trello.updateBoardPermissionLevel
Update board permission level.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board permission level. One of: org, private, public.

## Trello.updateBoardSelfJoinState
Update board self join state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | Boolean    | Board self join state. One of: true, false.

## Trello.updateBoardVotingPrefs
Update board voting preferences.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Board voting preferences. One of: disabled, members, observers, org, public.

## Trello.createBoard
Update board voting preferences.

| Field               | Type       | Description
|---------------------|------------|----------
| apiKeys             | credentials| Your API keys credentials.
| accessToken         | String     | Access token.
| boardId             | String     | The board identifier.
| name                | String     | Board name, a string with a length from 1 to 16384.
| defaultLabels       | Boolean    | Default labels. One of: true, false.
| defaultLists        | Boolean    | Default lists. One of: true, false.
| desc                | String     | Description, a string with a length from 0 to 16384.
| idOrganization      | String     | The identifier or name of the organization to add the board to.
| idBoardSource       | String     | The identifier of the board to copy into the new board.
| keepFromSource      | String     | Keep from source, all or components of the source board to copy.
| powerUps            | String     | PowerUps. One of: all, calendar, cardAging, recap, voting.
| prefsPermissionLevel| String     | Preferences permission level. One of: org, private, public.
| prefsVoting         | String     | Preferences voting. One of: disabled, members, observers, org, public.
| prefsComments       | String     | Preferences comments. One of: disabled, members, observers, org, public.
| prefsInvitations    | String     | Preferences invitations. One of: admins, members.
| prefsSelfJoin       | Boolean    | Preferences self join. One of: true, false.
| prefsCardCovers     | Boolean    | Preferences card covers. One of: true, false.
| prefsBackground     | String     | Preferences background, a string with a length from 0 to 16384.
| prefsCardAging      | String     | Preferences card aging. One of: pirate, regular.

## Trello.createBoardCalendarKey
Create board calendar key.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.

## Trello.addChecklistToBoard
Add checklist to board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| name       | String     | Checklists name, a string with a length from 1 to 16384.

## Trello.createBoardEmailKey
Create board email key.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.

## Trello.createBoardLabels
Create board labels.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| name       | String     | Board labels name, a string with a length from 0 to 16384.
| color      | String     | Label color or null. Valid value: blue, green, orange, purple, red, yellow.

## Trello.createBoardList
Create board list.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| name       | String     | Board lists name, a string with a length from 0 to 16384.
| pos        | String     | A position. top, bottom, or a positive number.

## Trello.markBoardViewed
Mark board as viewed.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.

## Trello.createBoardPowerUps
Create board power Ups.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| value      | String     | Power Ups value. One of: calendar, cardAging, recap, voting.

## Trello.deleteMemberFromBoard
Delete member from board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| idMember   | String     | An identifier, username, or organization name of member.

## Trello.deleteBoardPowerUp
Delete board power up.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| boardId    | String     | The board identifier.
| powerUp    | String     | Board power up. One of: calendar, cardAging, recap, voting.

## Trello.getSingleCard
Get a single card by id or shortlink.

| Field                    | Type       | Description
|--------------------------|------------|----------
| apiKeys                  | credentials| Your API keys credentials.
| accessToken              | String     | Access token.
| cardIdOrShortlink        | String     | Card id or shortlink.
| actions                  | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| actionsEntities          | Boolean    | Actions entities. One of: true, false.
| actionsDisplay           | Boolean    | Actions display. One of: true, false.
| actionsLimit             | String     | Actions limit, a number from 0 to 1000.
| actionFields             | String     | Comma-separated list of action fields. One of: all, data, date, idMemberCreator, type.
| actionMemberCreatorFields| String     | Comma-separated list of action member creator fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| attachments              | String     | Attachments, one of: true, false, cover.
| attachmentFields         | String     | Comma-separated list of attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| members                  | Boolean    | Members. One of: true, false.
| memberFields             | String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| membersVoted             | Boolean    | Members voted. One of: true, false.
| memberVotedFields        | String     | Comma-separated list of member voted fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| checkItemStates          | Boolean    | Check item states. One of: true, false.
| checkItemStateFields     | String     | Comma-separated list of check item state fields. One of: all, idCheckItem, state.
| checklists               | String     | Checklists. One of: all, none.
| checklistFields          | String     | Comma-separated list of checklist fields. One of: all, idBoard, idCard, name, pos.
| board                    | Boolean    | Board. One of: true, false.
| boardFields              | String     | Comma-separated list of board fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.
| list                     | Boolean    | List. One of: true, false.
| listFields               | String     | Comma-separated list of list fields. One of: all, closed, idBoard, name, pos, subscribed.
| pluginData               | Boolean    | Plugin data. One of: true, false.
| stickers                 | Boolean    | Stickers. One of: true, false.
| stickerFields            | String     | Comma-separated list of sticker fields. One of: all, image, imageScaled, imageUrl, left, rotate, top, zIndex.
| fields                   | String     | Comma-separated list of fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, dueComplete, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.

## Trello.getCardActions
Get a single card actions.

| Field              | Type       | Description
|--------------------|------------|----------
| apiKeys            | credentials| Your API keys credentials.
| accessToken        | String     | Access token.
| cardIdOrShortlink  | String     | Card id or shortlink.
| entities           | Boolean    | Actions entities. One of: true, false.
| display            | Boolean    | Actions display. One of: true, false.
| filter             | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| fields             | String     | Comma-separated list of action fields. One of: all, data, date, idMemberCreator, type.
| limit              | String     | Actions limit, a number from 0 to 1000.
| format             | String     | Format, one of: count, list, minimal.
| since              | String     | Since, a date, null or lastView.
| before             | String     | Before, a date, or null.
| idModels           | String     | Return actions related to these model ids.
| member             | Boolean    | Member. One of: true, false.
| memberFields       | String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| memberCreator      | Boolean    | Member creator. One of: true, false.
| memberCreatorFields| String     | Comma-separated list of action member creator fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getCardAttachments
Get a single card attachments.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Comma-separated list of attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| filter           | String     | Attachments filter, one of: true, false, cover.

## Trello.getCardSingleAttachment
Get a single attachments of single card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idAttachment     | String     | The id of the attachment.
| fields           | String     | Comma-separated list of attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.

## Trello.getCardBoard
Get a single attachments of single card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Comma-separated list of card board fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.

## Trello.getCardChecklistItemStates
Get a single card checklist item states.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Comma-separated list of fields. One of: all, idCheckItem, state.

## Trello.getCardChecklists
Get a single card checklists.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| cards            | String     | Cards, one of: all, closed, none, open, visible.
| cardFields       | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, dueComplete, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| checkItems       | String     | Check items. One of: all, none.
| checkItemFields  | String     | Check item fields. One of: name, nameData, pos, state, type.
| filter           | String     | Filter. One of: all, none.
| fields           | String     | Comma-separated list of fields. One of: all, idBoard, idCard, name, pos.

## Trello.getCardSingleCheckItem
Get a single check item of single card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idCheckItem      | String     | Id of the checkitem to retrieve.
| fields           | String     | Check item fields. One of: all, name, nameData, pos, state, type.

## Trello.getCardList
Get a single card list.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Card list fields. One of: all, closed, idBoard, name, pos, subscribed.

## Trello.getCardMembers
Get a single card members.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Card list fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getMemberVoteToCard
Get a member vote of a single card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Card list fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getCardStickers
Get a single card stickers.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| fields           | String     | Card sticker fields. One of: all, image, imageScaled, imageUrl, left, rotate, top, zIndex.

## Trello.getCardSingleSticker
Get a single sticker of a single card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idSticker        | String     | Card sticker id.
| fields           | String     | Card sticker fields. One of: all, image, imageScaled, imageUrl, left, rotate, top, zIndex.

## Trello.updateSingleCard
Update a single card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| name             | String     | Name of single card, a string with a length from 1 to 16384.
| desc             | String     | Description of single card, a string with a length from 0 to 16384.
| closed           | Boolean    | Is closed. One of: true, false.
| idMembers        | String     | A comma-separated list of objectIds, 24-character hex strings.
| idAttachmentCover| String     | Id of the image attachment of this card to use as its cover.
| idList           | String     | Id of the list the card should be moved to.
| idLabels         | String     | A comma-separated list of objectIds, 24-character hex strings.
| idBoard          | String     | Id of the board the card should be moved to.
| pos              | String     | A position. top, bottom, or a positive number.
| due              | String     | Due a date.
| dueComplete      | Boolean    | Is due complete. One of: true, false.
| subscribed       | Boolean    | Is subscribed. One of: true, false.

## Trello.updateCardCheckItemName
Update a single card check item name.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist.
| idCheckItem      | String     | The id of the checkitem to modify.
| value            | String     | Check item name, a string with a length from 1 to 16384.

## Trello.updateCardCheckItemPos
Update a single card check item position.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist.
| idCheckItem      | String     | The id of the checkitem to modify.
| value            | String     | Check item position. One of: top, bottom, or a positive number.

## Trello.updateCardCheckItemState
Update a single card check item state.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist.
| idCheckItem      | String     | The id of the checkitem to modify.
| value            | String     | Check item state. One of: complete, incomplete, true, false.

## Trello.updateCardCheckItem
Update a single card check item.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idCheckItem      | String     | The id of the checkitem to modify.
| name             | String     | Check item name, a string with a length from 1 to 16384.
| state            | String     | Check item state. One of: complete, incomplete, true, false.
| idChecklist      | String     | Check item checklist id.
| pos              | String     | Check item position. One of: top, bottom, or a positive number.

## Trello.updateCardCloseState
Update a single card close state.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | Boolean    | Card close state. One of: true, false.

## Trello.updateCardDescription
Update a single card description.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | Card description, a string with a length from 0 to 16384.

## Trello.updateCardDueDate
Update a single card due date.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | Card due date.

## Trello.updateCardDueComplete
Update a single card due complete.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | Boolean    | Card due complete. One of: true, false.

## Trello.setAttachmentAsCoverOfCard
Set attachment as cover of card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | Id of the image attachment of this card to use as its cover.

## Trello.setCardBoard
Set card board.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | Id of the board the card should be moved to.
| idList           | String     | id of the list that the card should be moved to on the new board.

## Trello.setCardList
Set card list.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | Id of the list the card should be moved to.

## Trello.setCardMembers
Set card members.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | A comma-separated list of objectIds, 24-character hex strings.

## Trello.updateCardName
Update card name.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | Card name, a string with a length from 1 to 16384.

## Trello.updateCardPosition
Update card position.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | A position. top, bottom, or a positive number.

## Trello.updateCardSingleSticker
Update card single sticker.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idSticker        | String     | The id of the sticker to modify.
| top              | String     | Distance from top.
| left             | String     | Distance from left.
| zIndex           | Number     | Valid Z values for stickers, must be an integer.
| rotate           | Number     | Rotation angle.

## Trello.updateCardSubscriptionState
Update single card subscription state.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | Boolean    | Card subscription state. One of: true, false.

## Trello.createCard
Create new card.

| Field         | Type       | Description
|---------------|------------|----------
| apiKeys       | credentials| Your API keys credentials.
| accessToken   | String     | Access token.
| idList        | String     | Id of the list that the card should be added to.
| name          | String     | The name of the new card.
| desc          | String     | New card description, a string with a length from 0 to 16384.
| pos           | String     | New card position. top, bottom, or a positive number.
| due           | String     | Due date.
| dueComplete   | Boolean    | Due complete. One of: true, false.
| idMembers     | String     | A comma-separated list of objectIds, 24-character hex strings.
| idLabels      | String     | A comma-separated list of objectIds, 24-character hex strings.
| urlSource     | String     | New card url source. A URL starting with http:// or https://.
| fileSource    | String     | New card file source.
| idCardSource  | String     | The id of the card to copy into a new card.
| keepFromSource| String     | Comma-separated list of keep from source. One of: all, attachments, checklists, comments, due, labels, members, stickers.

## Trello.addCommentToCard
Add new comment to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| text             | String     | Text of comment, a string with a length from 1 to 16384.

## Trello.addAttachmentToCard
Add attachment to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| file             | String     | File for add.
| url              | String     | File url to add. A URL starting with http:// or https://.
| name             | String     | Name of attachment, a string with a length from 0 to 256.
| mimeType         | String     | Mime type of attachment, a string with a length from 0 to 256.

## Trello.createCardCheckItem
Create card check item.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist.
| name             | String     | New check item name, a string with a length from 1 to 16384.
| pos              | String     | New check item position. One of: top, bottom, or a positive number.

## Trello.convertCardCheckItemToCard
Convert card checkItem to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist.
| idCheckItem      | String     | The id of the checkitem to modify.

## Trello.addChecklistToCard
Add checklist to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | The id of the checklist to add to the card, or null to create a new one.
| name             | String     | Name, a string with a length from 0 to 16384.
| idChecklistSource| String     | The id of the source checklist to copy into a new checklist.

## Trello.addCardLabel
Add label to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | The id of the label to add.

## Trello.addMemberToCard
Add member to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | The id of the member to add to the card.

## Trello.createCardLabels
Create card labels.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| color            | String     | Label color name. One of: blue, green, orange, purple, red, yellow.
| name             | String     | Label name, a string with a length from 0 to 16384.

## Trello.markCardAssociatedNotificationsRead
Mark card associated notifications as read.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.

## Trello.addMemberVoteToCard
Add member vote to card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| value            | String     | The id of the member to vote 'yes' on the card.

## Trello.createCardSticker
Create card sticker.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| image            | String     | Sticker image, a string with a length from 0 to 16384.
| top              | String     | Distance from top.
| left             | String     | Distance from left.
| zIndex           | Number     | Valid Z values for stickers, must be an integer.
| rotate           | Number     | Rotation angle.

## Trello.deleteCard
Delete card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.

## Trello.deleteAttachmentFromCard
Delete attachment from card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idAttachment     | String     | The id of the attachment to remove from the card.

## Trello.deleteCardCheckItem
Delete card check item.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist.
| idCheckItem      | String     | The id of the check item to remove.

## Trello.deleteCardCheckList
Delete card check list.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idChecklist      | String     | The id of the checklist to remove from the card.

## Trello.deleteLabelFromCard
Delete label from card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idLabel          | String     | The id of the label to delete.

## Trello.deleteMemberFromCard
Delete member from card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idMember         | String     | The id of the member to remove from the card.

## Trello.deleteMemberVoteFromCard
Delete member vote from card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idMember         | String     | The id of the member whose vote to rescind.

## Trello.deleteSingleStickerFromCard
Delete single sticker from card.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| cardIdOrShortlink| String     | Card id or shortlink.
| idSticker        | String     | The id of the sticker to remove.

## Trello.getChecklist
Get single checklist.

| Field          | Type       | Description
|----------------|------------|----------
| apiKeys        | credentials| Your API keys credentials.
| accessToken    | String     | Access token.
| idChecklist    | String     | The identifier of the checklist.
| cards          | String     | Cards type. One of: all, closed, none, open, visible.
| cardFields     | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| checkItems     | String     | Check items. One of: all, none.
| checkItemFields| String     | Comma-separated list of check item fields. One of: all, name, nameData, pos, state, type.
| fields         | String     | Comma-separated list of fields. One of: all, idBoard, idCard, name, pos.

## Trello.getChecklistBoard
Get checklist board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idChecklist| String     | The identifier of the checklist.
| fields     | String     | Comma-separated list of fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.

## Trello.getChecklistCards
Get checklist cards.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKeys         | credentials| Your API keys credentials.
| accessToken     | String     | Access token.
| idChecklist     | String     | The identifier of the checklist.
| actions         | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| attachments     | String     | Attachments. One of: A true, false or cover.
| attachmentFields| String     | Comma-separated list of attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| stickers        | Boolean    | Show stickers. One of: true, false.
| members         | Boolean    | Show members. One of: true, false.
| memberFields    | String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| checkItemStates | String     | Check item states. One of: true, false.
| checklists      | Boolean    | Checklists. One of: all, none.
| limit           | String     | Limit to show, a number from 1 to 1000.
| since           | String     | Since to show, a date.
| before          | String     | Before to show, a date.
| filter          | String     | Type filter. One of: all, closed, none, open.
| fields          | String     | Comma-separated list of fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.

## Trello.getChecklistItems
Get checklist items.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idChecklist| String     | The identifier of the checklist.
| filter     | String     | Filter. One of: all, none.
| fields     | String     | Comma-separated list of fields. One of: all, name, nameData, pos, state, type.

## Trello.updateChecklist
Update checklist.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idChecklist| String     | The identifier of the checklist.
| name       | String     | New name, a string with a length from 1 to 16384.
| pos        | String     | A position. top, bottom, or a positive number.

## Trello.updateChecklistName
Update checklist name.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idChecklist| String     | The identifier of the checklist.
| value      | String     | New name value, a string with a length from 1 to 16384.

## Trello.updateChecklistPosition
Update checklist position.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idChecklist| String     | The identifier of the checklist.
| value      | String     | A position. top, bottom, or a positive number.

## Trello.createChecklist
Create new checklist.

| Field            | Type       | Description
|------------------|------------|----------
| apiKeys          | credentials| Your API keys credentials.
| accessToken      | String     | Access token.
| idCard           | String     | Identifier of the card that the checklist should be added to.
| name             | String     | Checklist name, a string with a length from 0 to 16384.
| pos              | String     | A position. top, bottom, or a positive number.
| idChecklistSource| String     | The identifier of the source checklist to copy into a new checklist.

## Trello.createItemInChecklist
Create new item in checklist.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idChecklist| String     | The identifier of the checklist.
| name       | String     | Checklist item name, a string with a length from 0 to 16384.
| pos        | String     | A position. top, bottom, or a positive number.
| checked    | Boolean    | Is checked. One of: true, false.

## Trello.deleteChecklist
Delete checklist.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idChecklist| String     | The identifier of the checklist.

## Trello.deleteItemFromChecklist
Delete checklist item from checklist.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idChecklist| String     | The identifier of the checklist.
| idCheckItem| String     | The identifier of the check item to remove.

## Trello.getList
Get single list.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idList     | String     | The identifier of the list.
| cards      | String     | Type of cards. One of: all, closed, none, open.
| cardFields | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| board      | Boolean    | Board. One of: true, false.
| boardFields| String     | Comma-separated list of board fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.
| fields     | String     | Comma-separated list of fields. One of: all, closed, idBoard, name, pos, subscribed.

## Trello.getListActions
Get single list actions.

| Field              | Type       | Description
|--------------------|------------|----------
| apiKeys            | credentials| Your API keys credentials.
| accessToken        | String     | Access token.
| idList             | String     | The identifier of the list.
| entities           | Boolean    | Entities. One of: true, false.
| display            | Boolean    | Display. One of: true, false.
| filter             | String     | Comma-separated list of filter. One of: all, commentCard, convertToCardFromCheckItem, copyCard, emailCard, createCard, createList, deleteCard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateList, updateList:closed, updateList:name.
| fields             | String     | Comma-separated list of fields. One of: all, data, date, idMemberCreator, type.
| format             | String     | Format to show. One of: count, list, minimal.
| idModels           | String     | Only return actions related to these model identifiers.
| member             | Boolean    | Member. One of: true, false.
| memberFields       | String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| memberCreator      | String     | Ьember сreator. One of: true, false.
| memberCreatorFields| String     | Comma-separated list of member сreator fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| limit              | String     | Limit to show, a number from 0 to 1000.
| since              | String     | Since to show. One of: A date, null or lastView.
| before             | String     | Before to show, a date.
| page               | String     | Page limit must be less than 1000.

## Trello.getListBoard
Get single list boards.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idList     | String     | The identifier of the list.
| fields     | String     | Comma-separated list of fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.

## Trello.getListCards
Get single list cards.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKeys         | credentials| Your API keys credentials.
| accessToken     | String     | Access token.
| idList          | String     | The identifier of the list.
| actions         | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| attachments     | String     | A boolean value or cover.
| attachmentFields| String     | Comma-separated list of attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| stickers        | Boolean    | Stickers. One of: true, false.
| members         | Boolean    | Members. One of: true, false.
| memberFields    | String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| checkItemStates | String     | Check item states. One of: true, false.
| checklists      | String     | Checklists. One of: all, none.
| filter          | String     | Type of filter. One of: all, closed, none, open.
| fields          | String     | Comma-separated list of fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| limit           | String     | Limit to show, a number from 0 to 1000.
| since           | String     | Since to show. One of: A date, null or lastView.
| before          | String     | Before to show, a date.

## Trello.updateList
Update single list.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idList     | String     | The identifier of the list.
| name       | String     | Name of list, a string with a length from 1 to 16384.
| closed     | String     | Is closed. One of: true, false.
| idBoard    | String     | Identifier of the board the list should be moved to.
| pos        | String     | A position. top, bottom, or a positive number.
| subscribed | String     | Is subscribed. One of: true, false.

## Trello.updateListCloseState
Update list close state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idList     | String     | The identifier of the list.
| value      | String     | Close state. One of: true, false.

## Trello.updateListBoard
Move single list to other board.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idList     | String     | The identifier of the list.
| value      | String     | Identifier of the board the list should be moved to.
| pos        | String     | Position of the list on the new board. One of: top, bottom, or a positive number.

## Trello.updateListName
Update single list name.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idList     | String     | The identifier of the list.
| value      | String     | List new name, a string with a length from 1 to 16384.

## Trello.updateListPosition
Update single list position.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idList     | String     | The identifier of the list.
| value      | String     | A position. top, bottom, or a positive number.

## Trello.updateListSubscriptionState
Update single list subscription state.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idList     | String     | The identifier of the list.
| value      | Boolean    | Subscription state. One of: true, false.

## Trello.createList
Create  new list.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| name        | String     | Name of new list, a string with a length from 1 to 16384.
| idBoard     | String     | Identifier of the board that the list should be added to.
| idListSource| String     | The identifier of the list to copy into a new list.
| pos         | String     | A position. top, bottom, or a positive number.

## Trello.archiveAllListCards
Move to archive all list cards.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idList     | String     | The identifier of the list.

## Trello.moveAllListCards
Move all list cards ot new list.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idList     | String     | The identifier of the list.
| idBoard    | String     | Identifier of the board that the cards should be moved to.
| newListId  | String     | Identifier of the list that the cards should be moved to.

## Trello.getLabel
Move single label.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idLabel    | String     | The identifier of the label.
| fields     | String     | Comma-separated list of fields. One of: all, color, idBoard, name, uses.

## Trello.getLabelBoards
Move single label boards.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idLabel    | String     | The identifier of the label.
| fields     | String     | Comma-separated list of fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.

## Trello.updateLabel
Update single label.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idLabel    | String     | The identifier of the label.
| name       | String     | Label name, a string with a length from 0 to 16384.
| color      | String     | Label color, a valid label color.

## Trello.createLabel
Create new label.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idBoard    | String     | Label border identifier.
| name       | String     | New label name, a string with a length from 0 to 16384.
| color      | String     | New label color, a valid label color.

## Trello.deleteLabel
Delete single label.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idLabel    | String     | The identifier of the label.

## Trello.getMember
Get single member.

| Field                          | Type       | Description
|--------------------------------|------------|----------
| apiKeys                        | credentials| Your API keys credentials.
| accessToken                    | String     | Access token.
| idMemberOrUsername             | String     | The identifier of the member or username.
| actions                        | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| actionsEntities                | Boolean    | Actions entities. One of: true, false.
| actionsDisplay                 | Boolean    | Actions display. One of: true, false.
| actionsLimit                   | String     | Actions limit, a number from 0 to 1000.
| actionFields                   | String     | Comma-separated list of action fields. One of: all, data, date, idMemberCreator, type.
| actionSince                    | String     | Action since, a date, null or lastView.
| actionBefore                   | String     | Action before, a date.
| cards                          | String     | Tpye of cards. One of: all, closed, none, open, visible.
| cardFields                     | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| cardMembers                    | Boolean    | Card members. One of: true, false.
| cardMemberFields               | String     | Comma-separated list of card member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| cardAttachments                | String     | Card attachments. One of: boolean value or cover.
| cardAttachmentFields           | String     | Comma-separated list of card attachment fields. One of: bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| cardStickers                   | Boolean    | Card stickers. One of: true, false.
| boards                         | String     | Type of boards. One of: all, closed, members, open, organization, pinned, public, starred, unpinned.
| boardFields                    | String     | Comma-separated list of board fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.
| boardActions                   | String     | Comma-separated list of board actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| boardActionsEntities           | Boolean    | Board actions entities. One of: true, false.
| boardActionsDisplay            | Boolean    | Board actions display. One of: true, false.
| boardActionsFormat             | String     | Type of board actions format. One of: count, list, minimal.
| boardActionsSince              | String     | Board actions since, a date, null or lastView.
| boardActionsLimit              | String     | Board actions limit, a number from 0 to 1000.
| boardActionFields              | String     | Comma-separated list of board action fields. One of: all, data, date, idMemberCreator, type.
| boardLists                     | String     | Type of board lists. One of: all, closed, none, open.
| boardMemberships               | String     | Type of board memberships. One of: active, admin, deactivated, me, normal.
| boardOrganization              | Boolean    | Board organization. One of: true, false.
| boardOrganizationFields        | String     | Comma-separated list of board organization fields. One of: all, billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.
| boardsInvited                  | String     | Type of boards invited. One of: all, closed, members, open, organization, pinned, public, starred, unpinned.
| boardsInvitedFields            | String     | Comma-separated list of boards invited fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.
| boardStars                     | Boolean    | Board stars. One of: true, false.
| savedSearches                  | Boolean    | Saved searches. One of: true, false.
| organizations                  | String     | Type of organizations. One of: all, members, none, public.
| organizationFields             | String     | Comma-separated list of organization fields. One of: all, billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.
| organizationPaidAccount        | Boolean    | Organization paid account. One of: true, false.
| organizationsInvited           | String     | Type of organizations invited. One of: all, members, none, public.
| organizationsInvitedFields     | String     | Comma-separated list of organizations invited fields. One of: all, billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.
| notifications                  | String     | Comma-separated list of notifications. One of: all, addAdminToBoard, addAdminToOrganization, addedAttachmentToCard, addedMemberToCard, addedToBoard, addedToCard, addedToOrganization, cardDueSoon, changeCard, closeBoard, commentCard, createdCard, declinedInvitationToBoard, declinedInvitationToOrganization, invitedToBoard, invitedToOrganization, makeAdminOfBoard, makeAdminOfOrganization, memberJoinedTrello, mentionedOnCard, removedFromBoard, removedFromCard, removedFromOrganization, removedMemberFromCard, unconfirmedInvitedToBoard, unconfirmedInvitedToOrganization, updateCheckItemStateOnCard.
| notificationsEntities          | Boolean    | Notifications entities. One of: true, false.
| notificationsDisplay           | Boolean    | Notifications display. One of: true, false.
| notificationsLimit             | String     | Notifications limit, a number from 1 to 1000.
| notificationFields             | String     | Comma-separated list of notification fields. One of: all, data, date, idMemberCreator, type, unread.
| notificationMemberCreator      | Boolean    | Notification member creator. One of: true, false.
| notificationMemberCreatorFields| String     | Comma-separated list of notification member creator _fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| notificationBefore             | String     | Notification before. An identifier of notification.
| notificationSince              | String     | Notification since. An identifier notification.
| tokens                         | String     | Type of tokens. One of: all, none.
| paidAccount                    | Boolean    | Paid account. One of: true, false.
| boardBackgrounds               | String     | Board backgrounds. One of: all, custom, default, none, premium.
| customBoardBackgrounds         | String     | Custom board backgrounds. One of: all, none.
| customStickers                 | String     | Custom stickers. One of: all, none.
| customEmoji                    | String     | Custom emoji. One of: all, none.
| fields                         | String     | Comma-separated list of fields. One of: all, avatarHash, avatarSource, bio, bioData, confirmed, email, fullName, gravatarHash, id, idBoards, idBoardsPinned, idOrganizations, idPremOrgsAdmin, initials, loginTypes, memberType, oneTimeMessagesDismissed, prefs, premiumFeatures, products, status, status, trophies, uploadedAvatarHash, url, username.

## Trello.getMemberActions
Get member actions.

| Field              | Type       | Description
|--------------------|------------|----------
| apiKeys            | credentials| Your API keys credentials.
| accessToken        | String     | Access token.
| idMemberOrUsername | String     | The identifier of the member or username.
| entities           | Boolean    | Entities. One of: true, false.
| display            | Boolean    | Display. One of: true, false.
| filter             | String     | Comma-separated list of filter. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| fields             | String     | Fields, one of: all, data, date, idMemberCreator, type.
| limit              | String     | Limit, a number from 0 to 1000.
| format             | String     | Format, one of: count, list, minimal.
| since              | String     | Since for sort, a date or lastView.
| before             | String     | Before for sort, a date.
| page               | String     | Page limit must be less than 1000.
| idModels           | String     | Only return actions related to these model identifiers.
| member             | Boolean    | Member. One of: true, false.
| memberFields       | String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| memberCreator      | Boolean    | Member creator. One of: true, false.
| memberCreatorFields| String     | Comma-separated list of member creator fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getMemberBoardBackgrounds
Get member board backgrounds.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| filter            | String     | Filter, one of: all, custom, default, none, premium.

## Trello.getMemberSingleBoardBackground
Get member single board background.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idBoardBackground | String     | The identifier of the board background.
| fields            | String     | Comma-separated list of fields. One of: all, brightness, fullSizeUrl, scaled, tile.

## Trello.getMemberBoardStars
Get member board stars.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.

## Trello.getMemberSingleBoardStar
Get member single board stars.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idBoardStar       | String     | The identifier of the board star.

## Trello.getMemberBoads
Get member boards.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| filter            | String     | Comma-separated list of filter. One of: all, closed, members, open, organization, pinned, public, starred, unpinned.
| fields            | String     | Comma-separated list of fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.
| actions           | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| actionsEntities   | Boolean    | Actions entities. One of: true, false.
| actionsLimit      | String     | Actions limit, a number from 0 to 1000.
| actionsFormat     | String     | Actions format, one of: count, list, minimal.
| actionsSince      | String     | Actions since, a date or lastView.
| actionFields      | String     | Comma-separated list of action fields. One of: all, data, date, idMemberCreator, type.
| memberships       | String     | Memberships, one of: none, active, admin, deactivated, me, normal.
| organization      | Boolean    | Organization. One of: true, false.
| organizationFields| String     | Comma-separated list of organization fields. One of: all, billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.
| lists             | String     | Type of lists, one of: all, closed, none, open.

## Trello.getBoadsMemberIsInvitedTo
Get boads member is invited to.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| fields            | String     | Comma-separated list of filter. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.

## Trello.getMemberCards
Get list cards.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| actions           | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| attachments       | String     | Attachments, a boolean value or cover.
| attachmentFields  | String     | Comma-separated list of attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| stickers          | Boolean    | Stickers, one of: true, false.
| members           | Boolean    | Members. One of: true, false.
| memberFields      | String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| checkItemStates   | Boolean    | Check item states, one of: true, false.
| checklists        | String     | Checklists, one of: all, none.
| limit             | String     | Limit, a number from 1 to 1000.
| since             | String     | Since to show. One of: A date, null or lastView.
| before            | String     | Before to show, a date.
| filter            | String     | Type of filter, one of: all, closed, none, open, visible.
| fields            | String     | Comma-separated list of fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.

## Trello.getMemberCustomBoardBackgrounds
Get member custom board backgrounds.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| filter            | String     | Filter, one of: all, none.

## Trello.getMemberCustomBoardBackground
Get member single custom board backgrounds.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idBoardBackground | String     | Board background identifier.
| fields            | String     | Type of fields. One of: all, brightness, fullSizeUrl, scaled, tile.

## Trello.getMemberCustomEmoji
Get member custom emoji.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| filter            | String     | Filter, one of: all, none.

## Trello.getMemberSingleCustomEmoji
Get member single custom emoji.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idCustomEmoji     | String     | Custom emoji identifier.
| fields            | String     | Type of fields. One of: all, name, url.

## Trello.getMemberCustomStickers
Gets a list of all of the member uploaded stickers.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| filter            | String     | Type of filter, one of: all, none.

## Trello.getMemberSingleCustomSticker
Get member single uploaded stickers.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idCustomSticker   | String     | The identifier of the custom sticker.
| fields            | String     | Fields to show, one of: all, scaled, url.

## Trello.getMemberDeltas
Gets member deltas.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| tags              | String     | A valid tag for subscribing.
| ixLastUpdate      | String     | Last update, a number from -1 to Infinity.

## Trello.getMemberNotifications
Gets member notifications.

| Field              | Type       | Description
|--------------------|------------|----------
| apiKeys            | credentials| Your API keys credentials.
| accessToken        | String     | Access token.
| idMemberOrUsername | String     | The identifier of the member or username.
| entities           | Boolean    | Entities, one of: true, false.
| display            | Boolean    | Display, one of: true, false.
| filter             | String     | Comma-separated list of filter. One of: all, addAdminToBoard, addAdminToOrganization, addedAttachmentToCard, addedMemberToCard, addedToBoard, addedToCard, addedToOrganization, cardDueSoon, changeCard, closeBoard, commentCard, createdCard, declinedInvitationToBoard, declinedInvitationToOrganization, invitedToBoard, invitedToOrganization, makeAdminOfBoard, makeAdminOfOrganization, memberJoinedTrello, mentionedOnCard, removedFromBoard, removedFromCard, removedFromOrganization, removedMemberFromCard, unconfirmedInvitedToBoard, unconfirmedInvitedToOrganization, updateCheckItemStateOnCard.
| readFilter         | String     | Type of read filter. One of: all, read, unread.
| fields             | String     | Comma-separated list of fields. One of: all, data, date, idMemberCreator, type, unread.
| page               | String     | Page to show, a number from 0 to 100.
| limit              | String     | Limit to show, a number from 0 to 1000.
| since              | String     | Since to show. One of: A date, null or lastView.
| before             | String     | Before to show, a date.
| memberCreator      | Boolean    | Member creator, one of: true, false.
| memberCreatorFields| String     | Comma-separated list of member creator fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getMemberOrganizations
Gets member organizations.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| filter            | String     | Type of filter. One of: all, members, none, public.
| fields            | String     | Comma-separated list of fields. One of: all, billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.
| paidAccount       | Boolean    | Paid account. One of: true, false.

## Trello.getOrganizationsMemberIsInvitedTo
Get organizations member is invited to.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| fields            | String     | Comma-separated list of fields. One of: all, billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.

## Trello.getMemberSavedSearches
Get member saved searches.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.

## Trello.getMemberSingleSavedSearch
Get member single saved searches.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idSavedSearch     | String     | The identifier of saved search.

## Trello.getMemberTokens
Get member tokens.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| filter            | String     | Filter, one of: all, none.
| webhooks          | Boolean    | Include webhooks, one of: true, false.

## Trello.updateMember
Update member.

| Field                         | Type       | Description
|-------------------------------|------------|----------
| apiKeys                       | credentials| Your API keys credentials.
| accessToken                   | String     | Access token.
| idMemberOrUsername            | String     | The identifier of the member or username.
| fullName                      | String     | Member full name, a string with a length of at least 1.
| initials                      | String     | Member initials, a string with a length from 1 to 4.
| username                      | String     | Member username, only lowercase letters, underscores, and numbers are allowed.
| bio                           | String     | Member bio, a string with a length from 0 to 16384.
| avatarSource                  | String     | Type of avatar source, one of: gravatar, none, upload.
| prefs/colorBlind              | Boolean    | Member preference color blind, one of: true, false.
| prefs/locale                  | String     | Member preference locale, a string with a length from 0 to 255.
| prefs/minutesBetweenSummaries-| String     | Member preference minutes between summaries, 1 for disabled, 1 or 60.

## Trello.updateMemberAvatarSource
Update member avatar source.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| value             | String     | Avatar source type, one of: gravatar, none, upload.

## Trello.updateMemberBio
Update member bio.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| value             | String     | Member bio, a string with a length from 0 to 16384.

## Trello.updateMemberBoardBackground
Update member board background.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idBoardBackground | String     | The identifier of the member board background.
| tile              | Boolean    | Tile, one of: true, false.
| brightness        | String     | Type of brightness, one of: dark, light, unknown.

## Trello.updateMemberCustomBoardBackground
Update member custom board background.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idBoardBackground | String     | The identifier of the member custom board background.
| tile              | Boolean    | Tile, one of: true, false.
| brightness        | String     | Type of brightness, one of: dark, light, unknown.

## Trello.updateMemberFullName
Update member fullname.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| value             | String     | New member fullname value, a string with a length of at least 1.

## Trello.updateMemberInitials
Update member initials.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| value             | String     | New member initials value, a string with a length from 1 to 4.

## Trello.updateMemberColorBlindPrefs
Update member color blind preference.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| value             | Boolean    | New member color blind preference value, one of: true, false.

## Trello.updateMemberLocalePrefs
Update member locale preference.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| value             | String     | New member locale preference value, a string with a length from 0 to 255.

## Trello.updateMemberSavedSearch
Update member saved search.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idSavedSearch     | String     | The identifier of the member saved search.
| name              | String     | Member saved search name, a non-empty string with at least one non-space character.
| query             | String     | Member saved search query, a string with a length from 1 to 16384.
| pos               | String     | Member saved search position, one of: top, bottom, or a positive number.

## Trello.updateMemberUsername
Update member username.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| value             | String     | New member username value, a string with a length of at least 3. Only lowercase letters, underscores, and numbers are allowed.

## Trello.createMemberAvatar
Create member avatar.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| file              | File       | New member avatar image.

## Trello.createMemberBoardBackground
Create member board background.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| file              | File       | Member board background image.

## Trello.createMemberBoardStar
Create member board star.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idBoard           | String     | The identifier of the board to star.
| pos               | String     | The board star position. top, bottom, or a positive number.

## Trello.createMemberCustomBoardBackground
Create member custom board background.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| file              | File       | Member custom board background image.

## Trello.createMemberCustomEmoji
Create member custom emoji.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| file              | File       | Member custom emoji image.
| name              | String     | Member custom emoji name, a string with a length from 2 to 64.

## Trello.createMemberCustomSticker
Create member custom sticker.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| file              | File       | Member custom sticker image.

## Trello.createMemberSavedSearch
Create member saved search.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| name              | String     | Member saved search name, a non-empty string with at least one non-space character.
| query             | String     | Member saved search query, a string with a length from 1 to 16384.
| pos               | String     | Member saved search position, one of: top, bottom, or a positive number.

## Trello.deleteMemberBoardBackground
Delete member board background.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idBoardBackground | String     | The identifier of the member board background.

## Trello.deleteMemberBoardStar
Delete member board star.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idBoardStar       | String     | The identifier of the board star to delete.

## Trello.deleteMemberCustomBoardBackground
Delete member custom board background.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idBoardBackground | String     | The identifier of the member custom board background.

## Trello.deleteMemberCustomSticker
Delete member custom sticker.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idCustomSticker   | String     | The identifier of the member custom sticker.

## Trello.deleteMemberSavedSearch
Delete member saved search.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idMemberOrUsername| String     | The identifier of the member or username.
| idSavedSearch     | String     | The identifier of the saved search to delete.

## Trello.getNotification
Get single notification.

| Field              | Type       | Description
|--------------------|------------|----------
| apiKeys            | credentials| Your API keys credentials.
| accessToken        | String     | Access token.
| idNotification     | String     | The identifier of the notification.
| display            | Boolean    | Expand display informations, one of: true, false.
| entities           | Boolean    | Expand entities informations, one of: true, false.
| fields             | String     | Comma-separated list of fields. One of: all, data, date, idMemberCreator, type, unread.
| memberCreator      | Boolean    | Expand member creator informations. One of: true, false.
| memberCreatorFields| String     | Comma-separated list of member creator fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| board              | Boolean    | Expand board informations, one of: true, false.
| boardFields        | String     | Comma-separated list of board fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.
| list               | Boolean    | Expand list informations, one of: true, false.
| card               | Boolean    | Expand card informations, one of: true, false.
| cardFields         | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| organization       | Boolean    | Expand organization informations, one of: true, false.
| organizationFields | String     | Comma-separated list of organization_fields. One of: all, billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.
| member             | Boolean    | Expand member informations, one of: true, false.
| memberFields       | String     | Member fields, one of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getNotificationBoard
Get single notification board.

| Field         | Type       | Description
|---------------|------------|----------
| apiKeys       | credentials| Your API keys credentials.
| accessToken   | String     | Access token.
| idNotification| String     | The identifier of the notification.
| fields        | String     | Comma-separated list of fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.

## Trello.getNotificationCard
Get single notification card.

| Field         | Type       | Description
|---------------|------------|----------
| apiKeys       | credentials| Your API keys credentials.
| accessToken   | String     | Access token.
| idNotification| String     | The identifier of the notification.
| fields        | String     | Comma-separated list of fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.

## Trello.getNotificationDisplay
Get single notification display.

| Field         | Type       | Description
|---------------|------------|----------
| apiKeys       | credentials| Your API keys credentials.
| accessToken   | String     | Access token.
| idNotification| String     | The identifier of the notification.

## Trello.getNotificationEntities
Get single notification entities.

| Field         | Type       | Description
|---------------|------------|----------
| apiKeys       | credentials| Your API keys credentials.
| accessToken   | String     | Access token.
| idNotification| String     | The identifier of the notification.

## Trello.getNotificationList
Get single notification list.

| Field         | Type       | Description
|---------------|------------|----------
| apiKeys       | credentials| Your API keys credentials.
| accessToken   | String     | Access token.
| idNotification| String     | The identifier of the notification.
| fields        | String     | Comma-separated list of fields. One of: all, closed, idBoard, name, pos, subscribed.

## Trello.getNotificationMember
Get single notification member.

| Field         | Type       | Description
|---------------|------------|----------
| apiKeys       | credentials| Your API keys credentials.
| accessToken   | String     | Access token.
| idNotification| String     | The identifier of the notification.
| fields        | String     | Comma-separated list of fields. One of: all, avatarHash, avatarSource, bio, bioData, confirmed, email, fullName, gravatarHash, idBoards, idBoardsPinned, idOrganizations, idPremOrgsAdmin, initials, loginTypes, memberType, oneTimeMessagesDismissed, prefs, premiumFeatures, products, status, status, trophies, uploadedAvatarHash, url, username.

## Trello.getNotificationMemberCreator
Get single notification member creator.

| Field         | Type       | Description
|---------------|------------|----------
| apiKeys       | credentials| Your API keys credentials.
| accessToken   | String     | Access token.
| idNotification| String     | The identifier of the notification.
| fields        | String     | Comma-separated list of fields. One of: all, avatarHash, avatarSource, bio, bioData, confirmed, email, fullName, gravatarHash, idBoards, idBoardsPinned, idOrganizations, idPremOrgsAdmin, initials, loginTypes, memberType, oneTimeMessagesDismissed, prefs, premiumFeatures, products, status, status, trophies, uploadedAvatarHash, url, username.

## Trello.getNotificationOrganization
Get single notification organization.

| Field         | Type       | Description
|---------------|------------|----------
| apiKeys       | credentials| Your API keys credentials.
| accessToken   | String     | Access token.
| idNotification| String     | The identifier of the notification.
| fields        | String     | Comma-separated list of fields. One of: all, billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.

## Trello.updateNotification
Update single notification.

| Field         | Type       | Description
|---------------|------------|----------
| apiKeys       | credentials| Your API keys credentials.
| accessToken   | String     | Access token.
| idNotification| String     | The identifier of the notification.
| unread        | Boolean    | Mark as unread, one of: true, false.

## Trello.markAllNotificationsAsRead
Mark all notifications as read.

| Field         | Type       | Description
|---------------|------------|----------
| apiKeys       | credentials| Your API keys credentials.
| accessToken   | String     | Access token.
| idNotification| String     | The identifier of the notification.

## Trello.getOrganization
Get single organization.

| Field                  | Type       | Description
|------------------------|------------|----------
| apiKeys                | credentials| Your API keys credentials.
| accessToken            | String     | Access token.
| idOrgOrName            | String     | The identifier or name of organization.
| actions                | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| actionsEntities        | Boolean    | Expand actions entities, one of: true, false.
| actionsDisplay         | Boolean    | Expand actions display, one of: true, false.
| actionsLimit           | String     | Actions limit to show, a number from 0 to 1000.
| actionFields           | String     | Type of action fields. One of: all, data, date, idMemberCreator, type.
| memberships            | String     | Type of memberships. One of: none, all, active, admin, deactivated, me, normal.
| membershipsMember      | Boolean    | Expand memberships member, one of: true, false.
| membershipsMemberFields| String     | Comma-separated list of memberships member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| members                | String     | Type of members. One of: admins, all, none, normal, owners.
| memberFields           | String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| memberActivity         | Boolean    | Expand member activity, one of: true or false; works for premium organizations only.
| membersInvited         | String     | Type of members invited. One of: admins, all, none, normal, owners.
| membersInvitedFields   | String     | Comma-separated list of members invited fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| pluginData             | Boolean    | Expand pluginData, one of: true, false.
| boards                 | String     | Type of boards. One of: all, open, closed, members, organization, public, starred.
| boardFields            | String     | Comma-separated list of board fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.
| boardActions           | String     | Comma-separated list of board actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| boardActionsEntities   | Boolean    | Expand board actions entities, one of: true, false.
| boardActionsDisplay    | Boolean    | Expand board actions display, one of: true, false.
| boardActionsFormat     | String     | Type of board actions format. One of: count, list, minimal.
| boardActionsSince      | String     | Board actions since to show. One of: A date, null or lastView.
| boardActionsLimit      | String     | Board actions limit to show, a number from 0 to 1000.
| boardActionFields      | String     | Comma-separated list of board action fields. One of: all, data, date, idMemberCreator, type.
| boardLists             | String     | Type of board lists. One of: all, closed, none, open.
| boardPluginData        | Boolean    | Expand board pluginData, one of: true, false.
| paidAccount            | Boolean    | Expand paid account, one of: true, false.
| fields                 | String     | Comma-separated list of fields. One of: all, billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.

## Trello.getOrganizationActions
Get single organization actions.

| Field              | Type       | Description
|--------------------|------------|----------
| apiKeys            | credentials| Your API keys credentials.
| accessToken        | String     | Access token.
| idOrgOrName        | String     | The identifier or name of organization.
| entities           | Boolean    | Expand entities, one of: true, false.
| display            | Boolean    | Expand display, one of: true, false.
| filter             | String     | Comma-separated list of filter. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| fields             | String     | Type of fields. One of: all, data, date, idMemberCreator, type.
| limit              | String     | Limit to show, a number from 0 to 1000.
| format             | String     | Type of format. One of: list, count, list, minimal.
| since              | String     | Since to show. One of: A date, null or lastView.
| before             | String     | Before to show, a date.
| page               | String     | Page limit must be less than 1000.
| idModels           | String     | Only return actions related to these model identifiers.
| member             | Boolean    | Expand member, one of: true, false.
| memberFields       | String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| memberCreator      | Boolean    | Expand memberCreator, one of: true, false.
| memberCreatorFields| String     | Comma-separated list of member creator fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.getOrganizationBoards
Get single organization boards.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| idOrgOrName       | String     | The identifier or name of organization.
| filter            | String     | Type of filter. One of: all, open, closed, members, organization, public, starred.
| fields            | String     | Comma-separated list of fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.
| actions           | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| actionsEntities   | Boolean    | Expand actions entities, one of: true, false.
| actionsLimit      | String     | Actions limit to show, a number from 0 to 1000.
| actionsFormat     | String     | Type of actions format. One of: count, list, minimal.
| actionsSince      | String     | Actions since to show. One of: A date, null or lastView.
| actionFields      | String     | Comma-separated list of action fields. One of: all, data, date, idMemberCreator, type.
| memberships       | String     | Type of memberships. One of: none, all, active, admin, deactivated, me, normal.
| organization      | Boolean    | Expand organization, one of: true, false.
| organizationFields| String     | Comma-separated list of organization fields. One of: all, billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.
| lists             | String     | Type of lists. One of: all, closed, none, open.

## Trello.getOrganizationDeltas
Get single organization deltas.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| idOrgOrName | String     | The identifier or name of organization.
| tags        | String     | A valid tag for subscribing.
| ixLastUpdate| String     | Last update, a number from -1 to Infinity.

## Trello.getOrganizationMembers
Get single organization members.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| filter     | String     | Type of filter. One of: all, admins, all, none, normal, owners.
| fields     | String     | Type of fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| activity   | Boolean    | Activity, one of: true, false, works for premium organizations only.

## Trello.getOrganizationMembersCards
Get single organization members cards.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKeys         | credentials| Your API keys credentials.
| accessToken     | String     | Access token.
| idOrgOrName     | String     | The identifier or name of organization.
| idMember        | String     | An identifier, username, or organization name.
| actions         | String     | Comma-separated list of actions. One of: all, addAttachmentToCard, addChecklistToCard, addMemberToBoard, addMemberToCard, addMemberToOrganization, addToOrganizationBoard, commentCard, convertToCardFromCheckItem, copyBoard, copyCard, copyCommentCard, createBoard, createCard, createList, createOrganization, deleteAttachmentFromCard, deleteBoardInvitation, deleteCard, deleteOrganizationInvitation, disablePowerUp, emailCard, enablePowerUp, makeAdminOfBoard, makeNormalMemberOfBoard, makeNormalMemberOfOrganization, makeObserverOfBoard, memberJoinedTrello, moveCardFromBoard, moveCardToBoard, moveListFromBoard, moveListToBoard, removeChecklistFromCard, removeFromOrganizationBoard, removeMemberFromCard, unconfirmedBoardInvitation, unconfirmedOrganizationInvitation, updateBoard, updateCard, updateCard:closed, updateCard:desc, updateCard:idList, updateCard:name, updateCheckItemStateOnCard, updateChecklist, updateList, updateList:closed, updateList:name, updateMember, updateOrganization.
| attachments     | String     | Attachments, a boolean value or cover.
| attachmentFields| String     | Comma-separated list of attachment fields. One of: all, bytes, date, edgeColor, idMember, isUpload, mimeType, name, previews, url.
| members         | Boolean    | Expand members, one of: true, false.
| memberFields    | String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| checkItemStates | Boolean    | Expand check item states, one of: true, false.
| checklists      | String     | Checklists, one of: all, none.
| board           | Boolean    | Expand board, one of: true, false.
| boardFields     | String     | Comma-separated list of board fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.
| list            | Boolean    | Expand list, one of: true, false.
| listFields      | String     | Comma-separated list of list fields. One of: all, closed, idBoard, name, pos, subscribed.
| filter          | String     | Type of filter. One of: all, closed, none, open, visible.
| fields          | String     | Comma-separated list of fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.

## Trello.getOrganizationMembersInvited
Get single organization members invited.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| fields     | String     | Comma-separated list of fields. One of: all, avatarHash, avatarSource, bio, bioData, confirmed, email, fullName, gravatarHash, idBoards, idBoardsPinned, idOrganizations, idPremOrgsAdmin, initials, loginTypes, memberType, oneTimeMessagesDismissed, prefs, premiumFeatures, products, status, status, trophies, uploadedAvatarHash, url, username.

## Trello.getOrganizationsMemberships
Get single organization memberships.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| filter     | String     | Comma-separated list of filter. One of: all, active, admin, deactivated, me, normal.
| member     | Boolean    | Expand member, one of: true, false.

## Trello.getOrganizationSingleMembership
Get single organization single membership.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| idOrgOrName | String     | The identifier or name of organization.
| idMembership| String     | A membership document identifier.
| member      | Boolean    | Expand member, one of: true, false.

## Trello.updateOrganization
Update single organization.

| Field                                | Type       | Description
|--------------------------------------|------------|----------
| apiKeys                              | credentials| Your API keys credentials.
| accessToken                          | String     | Access token.
| idOrgOrName                          | String     | The identifier or name of organization.
| prefs/orgInviteRestrict              | String     | An email address with optional expansion tokens.
| prefs/externalMembersDisabled        | Boolean    | Organization preference external members disabled. One of: true, false.
| prefs/associatedDomain               | String     | The google apps domain to link this org to.
| prefs/googleAppsVersion              | String     | Organization preference google apps version, a number from 1 to 2.
| prefs/boardVisibilityRestrict/private| String     | Organization preference board visibility restrict private. One of: admin, none, org.
| prefs/boardVisibilityRestrict/org    | String     | Organization preference board visibility restrict organization. One of: admin, none, org.
| prefs/boardVisibilityRestrict/public | String     | Organization preference board visibility restrict public. One of: admin, none, org.
| name                                 | String     | Organization name, a string with a length of at least 3. Only lowercase letters, underscores, and numbers are allowed.
| displayName                          | String     | Organization display name, a string with a length of at least 1.
| desc                                 | String     | Organization description, a string with a length from 0 to 16384.
| website                              | String     | Organization website, a URL starting with http:// or https:// or null.
| prefs/permissionLevel                | String     | Organization preference permission level. One of: private, public.

## Trello.updateOrganizationDesc
Update single organization description.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| value      | String     | Organization description value, a string with a length from 0 to 16384.

## Trello.updateOrganizationDisplayName
Update single organization display name.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| value      | String     | Organization display name value, a string with a length of at least 1.

## Trello.updateOrganizationMembers
Update single organization members.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| email      | String     | An email address.
| fullName   | String     | Full name, a string with a length of at least 1.
| type       | String     | Type, one of: admin, normal.

## Trello.updateOrganizationSingleMember
Update single organization single member.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| idMember   | String     | Single member identifier, username, or organization name.
| type       | String     | Single member type, one of: admin, normal.

## Trello.deactivateOrganizationMember
Deactivate single organization single member.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| idMember   | String     | Single member identifier, username, or organization name.
| value      | Boolean    | Single member deactivated, one of: true, false.

## Trello.updateOrganizationMembership
Update single organization membership.

| Field       | Type       | Description
|-------------|------------|----------
| apiKeys     | credentials| Your API keys credentials.
| accessToken | String     | Access token.
| idOrgOrName | String     | The identifier or name of organization.
| idMembership| String     | Membership identifier.
| type        | String     | Membership type, one of: admin, normal.
| memberFields| String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.

## Trello.updateOrganizationName
Update single organization name.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| value      | String     | Organization name, a string with a length of at least 3. Only lowercase letters, underscores, and numbers are allowed.

## Trello.updateOrganizationAssociatedDomain
Update single organization associated domain.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| value      | String     | The google apps domain to link this org to.

## Trello.updateOrganizationExternalMembersPrefs
Update single organization external members preferences disabled.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| value      | Boolean    | Organization external members preferences disabled. One of: true, false.

## Trello.updateOrganizationInviteRestrictPrefs
Update single organization invite restrict.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| value      | String     | An email address with optional expansion tokens.

## Trello.updateOrganizationPermissionLevelPrefs
Update single organization permission level.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| value      | String     | Organization permission level preferences. One of: private, public.

## Trello.updateOrganizationWebsite
Update single organization website.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| value      | String     | A URL starting with http:// or https://.

## Trello.createOrganization
Create organization.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| name       | String     | New organization name, a string with a length from 0 to 16384.
| displayName| String     | New organization display name, a string with a length of at least 1. Cannot begin or end with a space.
| desc       | String     | New organization description, a string with a length from 0 to 16384.
| website    | String     | New organization website, a URL starting with http:// or https://.

## Trello.createOrganizationLogo
Create organization logo.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| file       | File       | Organization logo image.

## Trello.deleteOrganization
Delete organization.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.

## Trello.deleteOrganizationLogo
Delete organization logo.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.

## Trello.deleteMemberFromOrganization
Delete member from organization.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| idMember   | String     | An identifier, username.

## Trello.deleteMemberFromAllOrganizationBoards
Delete member from all organization boards.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| idMember   | String     | An identifier, username.

## Trello.deleteOrganizationAssociatedDomain
Delete organization associated domain.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.

## Trello.deleteOrganizationInviteRestrict
Delete organization invite restrict.

| Field      | Type       | Description
|------------|------------|----------
| apiKeys    | credentials| Your API keys credentials.
| accessToken| String     | Access token.
| idOrgOrName| String     | The identifier or name of organization.
| value      | String     | An email address with optional expansion tokens.

## Trello.search
Search in your Trello account.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKeys           | credentials| Your API keys credentials.
| accessToken       | String     | Access token.
| query             | String     | Search query, a string with a length from 1 to 16384.
| idBoards          | String     | A comma-separated list of objectIds, 24-character hex strings.
| idOrganizations   | String     | A comma-separated list of objectIds, 24-character hex strings.
| idCards           | String     | A comma-separated list of objectIds, 24-character hex strings.
| modelTypes        | String     | Comma-separated list of model types. One of: all, actions, boards, cards, members, organizations.
| boardFields       | String     | Comma-separated list of board fields. One of: all, closed, dateLastActivity, dateLastView, desc, descData, idOrganization, invitations, invited, labelNames, memberships, name, pinned, powerUps, prefs, shortLink, shortUrl, starred, subscribed, url.
| boardsLimit       | String     | Boards limit, a number from 1 to 1000.
| cardFields        | String     | Comma-separated list of card fields. One of: all, badges, checkItemStates, closed, dateLastActivity, desc, descData, due, email, idAttachmentCover, idBoard, idChecklists, idLabels, idList, idMembers, idMembersVoted, idShort, labels, manualCoverAttachment, name, pos, shortLink, shortUrl, subscribed, url.
| cardsLimit        | String     | Cards limit. One of: a number from 1 to 1000.
| cardsPage         | String     | Cards page, a number from 0 to 100.
| cardBoard         | Boolean    | Card board, one of: true, false.
| cardList          | Boolean    | Card list, one of: true, false.
| cardMembers       | Boolean    | Card members, one of: true, false.
| cardStickers      | Boolean    | Card stickers, one of: true, false.
| cardAttachments   | String     | Card attachments, one of: A boolean value or cover.
| organizationFields| String     | Comma-separated list of organization fields. One of: all, billableMemberCount, desc, descData, displayName, idBoards, invitations, invited, logoHash, memberships, name, powerUps, prefs, premiumFeatures, products, url, website.
| organizationsLimit| String     | Organizations limit, one of: a number from 1 to 1000.
| memberFields      | String     | Comma-separated list of member fields. One of: all, avatarHash, bio, bioData, confirmed, fullName, idPremOrgsAdmin, initials, memberType, products, status, url, username.
| membersLimit      | String     | Members limit, one of: a number from 1 to 1000.
| partial           | Boolean    | Partial, one of: true, false.

## Trello.searchMembers
Search members in your Trello account.

| Field         | Type       | Description
|---------------|------------|----------
| apiKeys       | credentials| Your API keys credentials.
| accessToken   | String     | Access token.
| query         | String     | Search query, a string with a length from 1 to 16384.
| limit         | String     | Search limit, a number from 1 to 20.
| idBoard       | String     | Board identifier.
| idOrganization| String     | Organization identifier.
| onlyOrgMembers| Boolean    | Search only organization members, one of: true, false.
