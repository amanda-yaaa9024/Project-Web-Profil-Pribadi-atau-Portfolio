import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../wayfinder'
/**
* @see \App\Http\Controllers\ProfilController::contact
 * @see app/Http/Controllers/ProfilController.php:37
 * @route '/send-contact'
 */
export const contact = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: contact.url(options),
    method: 'post',
})

contact.definition = {
    methods: ["post"],
    url: '/send-contact',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\ProfilController::contact
 * @see app/Http/Controllers/ProfilController.php:37
 * @route '/send-contact'
 */
contact.url = (options?: RouteQueryOptions) => {
    return contact.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ProfilController::contact
 * @see app/Http/Controllers/ProfilController.php:37
 * @route '/send-contact'
 */
contact.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: contact.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\ProfilController::contact
 * @see app/Http/Controllers/ProfilController.php:37
 * @route '/send-contact'
 */
    const contactForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: contact.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\ProfilController::contact
 * @see app/Http/Controllers/ProfilController.php:37
 * @route '/send-contact'
 */
        contactForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: contact.url(options),
            method: 'post',
        })
    
    contact.form = contactForm
const send = {
    contact: Object.assign(contact, contact),
}

export default send